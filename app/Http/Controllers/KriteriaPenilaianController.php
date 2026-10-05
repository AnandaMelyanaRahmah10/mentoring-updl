<?php

namespace App\Http\Controllers;

use App\Models\KriteriaPenilaian;
use Illuminate\Http\Request;

class KriteriaPenilaianController extends Controller
{
    public function index()
    {
        $kriterias = KriteriaPenilaian::orderBy('nomor_point', 'asc')->get();

        return view(
            'master.kriteria.index',
            compact('kriterias')
        );
    }


    public function create()
    {
        return view('master.kriteria.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nomor_point' => 'required|integer|min:1|max:30|unique:kriteria_penilaian,nomor_point',

            'kode_kriteria' => 'required|max:30|unique:kriteria_penilaian,kode_kriteria',

            'kelompok' => 'required|in:PLAN,DO,CHECK,ACT',

            'kriteria' => 'required',

            'kebutuhan_eviden' => 'nullable',

            'bobot' => 'required|numeric|min:0|max:100',

            'status' => 'required|in:aktif,nonaktif',
        ]);


        KriteriaPenilaian::create([
            'nomor_point' => $request->nomor_point,

            'kode_kriteria' => $request->kode_kriteria,

            'kelompok' => $request->kelompok,

            'kriteria' => $request->kriteria,

            'kebutuhan_eviden' => $request->kebutuhan_eviden,

            'bobot' => $request->bobot,

            'status' => $request->status,
        ]);


        return redirect()
            ->route('master.kriteria.index')
            ->with(
                'success',
                'Kriteria penilaian berhasil ditambahkan.'
            );
    }


    public function edit(KriteriaPenilaian $kriteria)
    {
        return view(
            'master.kriteria.edit',
            compact('kriteria')
        );
    }


    public function update(
        Request $request,
        KriteriaPenilaian $kriteria
    ) {

        $request->validate([
            'nomor_point' =>
                'required|integer|min:1|max:30|unique:kriteria_penilaian,nomor_point,' . $kriteria->id,

            'kode_kriteria' =>
                'required|max:30|unique:kriteria_penilaian,kode_kriteria,' . $kriteria->id,

            'kelompok' =>
                'required|in:PLAN,DO,CHECK,ACT',

            'kriteria' =>
                'required',

            'kebutuhan_eviden' =>
                'nullable',

            'bobot' =>
                'required|numeric|min:0|max:100',

            'status' =>
                'required|in:aktif,nonaktif',
        ]);


        $kriteria->update([
            'nomor_point' => $request->nomor_point,

            'kode_kriteria' => $request->kode_kriteria,

            'kelompok' => $request->kelompok,

            'kriteria' => $request->kriteria,

            'kebutuhan_eviden' => $request->kebutuhan_eviden,

            'bobot' => $request->bobot,

            'status' => $request->status,
        ]);


        return redirect()
            ->route('master.kriteria.index')
            ->with(
                'success',
                'Kriteria penilaian berhasil diperbarui.'
            );
    }


    public function destroy(KriteriaPenilaian $kriteria)
    {
        $kriteria->delete();

        return redirect()
            ->route('master.kriteria.index')
            ->with(
                'success',
                'Kriteria penilaian berhasil dihapus.'
            );
    }
}