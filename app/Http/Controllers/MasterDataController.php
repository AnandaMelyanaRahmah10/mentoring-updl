<?php

namespace App\Http\Controllers;

use App\Models\Updl;
use App\Models\KriteriaPenilaian;

class MasterDataController extends Controller
{
    public function index()
    {
        $totalUpdl = Updl::count();

        $totalKriteria = KriteriaPenilaian::where(
            'status',
            'aktif'
        )->count();

        return view('master-data.index', compact(
            'totalUpdl',
            'totalKriteria'
        ));
    }
}