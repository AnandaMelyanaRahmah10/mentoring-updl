<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReportMentoring extends Model
{
    use HasFactory;

    protected $table = 'report_mentoring';

    protected $fillable = [
        'updl',
        'periode_bulan',
        'periode_tahun',
        'status',
        'persentase_plan',
        'persentase_do',
        'persentase_check',
        'persentase_act',
        'created_by',
    ];
}