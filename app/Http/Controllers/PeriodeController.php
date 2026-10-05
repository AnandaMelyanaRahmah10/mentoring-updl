<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function index()
    {
        $periodes = Periode::orderBy('tahun', 'desc')
            ->orderBy('bulan', 'desc')
            ->get();

        return view(
            'master.periode.index',
            compact('periodes')
        );
    }


    public function create()
    {
        return view('master.periode.create');
    }


    public function store(Request $request)
    {
        $request->validate([

            'bulan' => [
                'required',
                'integer',
                'min:1',
                'max:12',
            ],

            'tahun' => [
                'required',
                'integer',
                'min:2020',
                'max:2100',
            ],

            'status' => [
                'required',
                'in:aktif,nonaktif',
            ],

        ]);


        $namaBulan = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',
        ];


        $request->validate([
            'bulan' => 'unique:periode,bulan,NULL,id,tahun,' . $request->tahun,
        ], [
            'bulan.unique' => 'Periode bulan dan tahun tersebut sudah tersedia.',
        ]);


        Periode::create([

            'bulan' => $request->bulan,

            'tahun' => $request->tahun,

            'nama_periode' =>
                $namaBulan[$request->bulan]
                . ' '
                . $request->tahun,

            'status' => $request->status,

        ]);


        return redirect()
            ->route('master.periode.index')
            ->with(
                'success',
                'Periode berhasil ditambahkan.'
            );
    }


    public function edit(Periode $periode)
    {
        return view(
            'master.periode.edit',
            compact('periode')
        );
    }


    public function update(
        Request $request,
        Periode $periode
    ) {

        $request->validate([

            'bulan' => [
                'required',
                'integer',
                'min:1',
                'max:12',
            ],

            'tahun' => [
                'required',
                'integer',
                'min:2020',
                'max:2100',
            ],

            'status' => [
                'required',
                'in:aktif,nonaktif',
            ],

        ]);


        $request->validate([
            'bulan' => 'unique:periode,bulan,' .
                $periode->id .
                ',id,tahun,' .
                $request->tahun,
        ], [
            'bulan.unique' => 'Periode bulan dan tahun tersebut sudah tersedia.',
        ]);


        $namaBulan = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',
        ];


        $periode->update([

            'bulan' => $request->bulan,

            'tahun' => $request->tahun,

            'nama_periode' =>
                $namaBulan[$request->bulan]
                . ' '
                . $request->tahun,

            'status' => $request->status,

        ]);


        return redirect()
            ->route('master.periode.index')
            ->with(
                'success',
                'Periode berhasil diperbarui.'
            );
    }


    public function destroy(Periode $periode)
    {
        $periode->delete();

        return redirect()
            ->route('master.periode.index')
            ->with(
                'success',
                'Periode berhasil dihapus.'
            );
    }
}