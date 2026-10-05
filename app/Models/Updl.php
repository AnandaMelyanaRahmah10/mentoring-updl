<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Updl extends Model
{
    use HasFactory;

    protected $table = 'updl';

    protected $fillable = [
        'kode_updl',
        'nama_updl',
        'keterangan',
        'status',
    ];
}