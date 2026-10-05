<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_report', function (Blueprint $table) {

            $table->id();

            // Report induk
            $table->foreignId('report_id')
                  ->constrained('report_mentoring')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();

            // Master kriteria
            $table->foreignId('kriteria_id')
                  ->constrained('master_kriteria')
                  ->restrictOnDelete()
                  ->cascadeOnUpdate();

            // Hasil mentoring
            $table->enum('hasil', [
                'K',
                'I'
            ])->nullable();

            // Penjelasan/eviden
            $table->text('eviden')->nullable();

            // Catatan admin
            $table->text('catatan')->nullable();

            // File bukti
            $table->string('nama_file')->nullable();

            $table->string('nama_file_asli')->nullable();

            $table->string('path_file', 500)->nullable();

            $table->string('tipe_file', 100)->nullable();

            $table->bigInteger('ukuran_file')->nullable();

            $table->timestamps();

            // Satu kriteria hanya boleh mempunyai
            // satu jawaban dalam satu report
            $table->unique([
                'report_id',
                'kriteria_id'
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_report');
    }
};