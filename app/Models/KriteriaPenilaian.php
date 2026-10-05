<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KriteriaPenilaian extends Model
{
    use HasFactory;

    protected $table = 'kriteria_penilaian';

    protected $fillable = [
        'nomor_point',
        'kode_kriteria',
        'kelompok',
        'kriteria',
        'kebutuhan_eviden',
        'bobot',
        'status',
    ];
}