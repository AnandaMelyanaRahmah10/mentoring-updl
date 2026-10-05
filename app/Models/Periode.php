<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Periode extends Model
{
    use HasFactory;

    protected $table = 'periode';

    protected $fillable = [
        'bulan',
        'tahun',
        'nama_periode',
        'status',
    ];

    protected $casts = [
        'bulan' => 'integer',
        'tahun' => 'integer',
    ];
}