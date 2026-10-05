<?php

namespace App\Http\Controllers;

use App\Models\Updl;
use App\Models\Periode;
use App\Models\KriteriaPenilaian;
use App\Models\ReportMentoring;
use App\Models\DetailReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportMentoringController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN REPORT MENTORING
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $updls = Updl::where('status', 'aktif')
            ->orderBy('nama_updl')
            ->get();

        $periodes = Periode::where('status', 'aktif')
            ->orderBy('tahun', 'desc')
            ->orderBy('bulan')
            ->get();

        return view(
            'report-mentoring.index',
            compact('updls', 'periodes')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | FORM INPUT KRITERIA
    |--------------------------------------------------------------------------
    */

    public function form(Request $request)
{
    // Ambil semua UPDL aktif
    $updls = Updl::where('status', 'aktif')
        ->orderBy('nama_updl')
        ->get();

    // Ambil semua periode aktif
    $periodes = Periode::where('status', 'aktif')
        ->orderBy('tahun', 'desc')
        ->orderBy('bulan')
        ->get();

    // Default
    $updl = null;
    $periode = null;
    $kriterias = collect();

    // Kalau UPDL dan periode sudah dipilih
    if ($request->filled('updl_id') && $request->filled('periode_id')) {

        $request->validate([
            'updl_id' => 'required|exists:updl,id',
            'periode_id' => 'required|exists:periode,id',
        ]);

        $updl = Updl::findOrFail($request->updl_id);

        $periode = Periode::findOrFail($request->periode_id);

        // Ambil semua kriteria
        $kriterias = KriteriaPenilaian::orderBy('nomor_point')
            ->get();
    }

    return view(
        'report-mentoring.form',
        compact(
            'updls',
            'periodes',
            'updl',
            'periode',
            'kriterias'
        )
    );
}


    /*
    |--------------------------------------------------------------------------
    | SIMPAN REPORT MENTORING
    |--------------------------------------------------------------------------
    */

   public function store(Request $request)
{
    $request->validate([
        'updl_id' => 'required|exists:updl,id',
        'periode_id' => 'required|exists:periode,id',

        'status' => 'required|array',
        'status.*' => 'required|in:K,I',

        'eviden' => 'nullable|array',
        'catatan' => 'nullable|array',

        'bukti.*' => [
            'nullable',
            'file',
            'mimes:pdf,jpg,jpeg,png,doc,docx,xls,xlsx',
            'max:5120',
        ],
    ]);

    $updl = Updl::findOrFail($request->updl_id);
    $periode = Periode::findOrFail($request->periode_id);

    $nilaiUpdl = $updl->nama_updl;

    // =====================================================
    // CEK APAKAH REPORT SUDAH ADA
    // =====================================================

    $reportLama = ReportMentoring::where('updl', $nilaiUpdl)
        ->where('periode_bulan', $periode->bulan)
        ->where('periode_tahun', $periode->tahun)
        ->first();

    if ($reportLama) {

        return redirect()
            ->route('report-mentoring.form', [
                'updl_id' => $updl->id,
                'periode_id' => $periode->id,
            ])
            ->withErrors([
                'report' => 'Report untuk ' .
                    $nilaiUpdl .
                    ' periode ' .
                    $periode->bulan .
                    '/' .
                    $periode->tahun .
                    ' sudah dibuat sebelumnya.'
            ]);
    }


    // =====================================================
    // SIMPAN REPORT
    // =====================================================

    DB::transaction(function () use (
        $request,
        $nilaiUpdl,
        $periode
    ) {

        $report = ReportMentoring::create([

            'updl' => $nilaiUpdl,

            'periode_bulan' => $periode->bulan,

            'periode_tahun' => $periode->tahun,

            'status' => 'draft',

            'persentase_plan' => 0,

            'persentase_do' => 0,

            'persentase_check' => 0,

            'persentase_act' => 0,

            'created_by' => auth()->id(),

        ]);


        // =================================================
        // SIMPAN DETAIL
        // =================================================

        foreach ($request->status as $kriteriaId => $status) {

            $namaFile = null;
            $namaFileAsli = null;
            $pathFile = null;
            $tipeFile = null;
            $ukuranFile = null;


            // =============================================
            // UPLOAD BUKTI
            // =============================================

            if ($request->hasFile("bukti.$kriteriaId")) {

                $file = $request->file("bukti.$kriteriaId");

                $namaFileAsli =
                    $file->getClientOriginalName();

                $tipeFile =
                    $file->getClientMimeType();

                $ukuranFile =
                    $file->getSize();

                $namaFile =
                    $file->hashName();

                $pathFile =
                    $file->store('bukti', 'public');
            }


            // =============================================
            // DETAIL REPORT
            // =============================================

            DetailReport::create([

                'report_id' => $report->id,

                'kriteria_id' => $kriteriaId,

                'hasil' => $status,

                'eviden' =>
                    $request->eviden[$kriteriaId]
                    ?? null,

                'catatan' =>
                    $request->catatan[$kriteriaId]
                    ?? null,

                'nama_file' =>
                    $namaFile,

                'nama_file_asli' =>
                    $namaFileAsli,

                'path_file' =>
                    $pathFile,

                'tipe_file' =>
                    $tipeFile,

                'ukuran_file' =>
                    $ukuranFile,
            ]);
        }

    });


    // =====================================================
    // SELESAI
    // =====================================================

    return redirect()
        ->route('report-mentoring.index')
        ->with(
            'success',
            'Report mentoring berhasil disimpan.'
        );
}
}