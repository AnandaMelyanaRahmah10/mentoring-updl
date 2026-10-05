<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailReport extends Model
{
    use HasFactory;

    protected $table = 'detail_report';

    protected $fillable = [
        'report_id',
        'kriteria_id',
        'hasil',
        'eviden',
        'catatan',
        'nama_file',
        'nama_file_asli',
        'path_file',
        'tipe_file',
        'ukuran_file',
    ];
}