<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('report_mentoring', function (Blueprint $table) {

            $table->id();

            // Nama UPDL
            $table->string('updl', 150);

            // Periode laporan
            $table->tinyInteger('periode_bulan');

            $table->year('periode_tahun');

            // Status laporan
            $table->enum('status', [
                'draft',
                'final'
            ])->default('draft');

            // Hasil PLAN
            $table->decimal('persentase_plan', 6, 2)
                  ->default(0);

            // Hasil DO
            $table->decimal('persentase_do', 6, 2)
                  ->default(0);

            // Hasil CHECK
            $table->decimal('persentase_check', 6, 2)
                  ->default(0);

            // Hasil ACT
            $table->decimal('persentase_act', 6, 2)
                  ->default(0);

            // Nilai akhir
            $table->decimal('persentase_akhir', 6, 2)
                  ->default(0);

            // Admin yang membuat report
            $table->foreignId('created_by')
                  ->constrained('users')
                  ->restrictOnDelete()
                  ->cascadeOnUpdate();

            // Waktu finalisasi
            $table->dateTime('tanggal_finalisasi')
                  ->nullable();

            $table->timestamps();

            // Satu UPDL hanya boleh mempunyai
            // satu report untuk satu periode
            $table->unique([
                'updl',
                'periode_bulan',
                'periode_tahun'
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('report_mentoring');
    }
};