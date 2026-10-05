<?php

namespace App\Http\Controllers;

use App\Models\Updl;
use Illuminate\Http\Request;

class UpdlController extends Controller
{
    public function index()
    {
        $updls = Updl::orderBy('id', 'desc')->get();

        return view('master.updl.index', compact('updls'));
    }

    public function create()
    {
        return view('master.updl.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_updl' => 'required|max:20|unique:updl,kode_updl',
            'nama_updl' => 'required|max:150',
            'keterangan' => 'nullable',
        ]);

        Updl::create([
            'kode_updl' => $request->kode_updl,
            'nama_updl' => $request->nama_updl,
            'keterangan' => $request->keterangan,
            'status' => 'aktif',
        ]);

        return redirect()
            ->route('master.updl.index')
            ->with('success', 'Data UPDL berhasil ditambahkan.');
    }

    public function edit(Updl $updl)
    {
        return view('master.updl.edit', compact('updl'));
    }

    public function update(Request $request, Updl $updl)
    {
        $request->validate([
            'kode_updl' => 'required|max:20|unique:updl,kode_updl,' . $updl->id,
            'nama_updl' => 'required|max:150',
            'keterangan' => 'nullable',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $updl->update([
            'kode_updl' => $request->kode_updl,
            'nama_updl' => $request->nama_updl,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('master.updl.index')
            ->with('success', 'Data UPDL berhasil diperbarui.');
    }

    public function destroy(Updl $updl)
    {
        $updl->delete();

        return redirect()
            ->route('master.updl.index')
            ->with('success', 'Data UPDL berhasil dihapus.');
    }
}