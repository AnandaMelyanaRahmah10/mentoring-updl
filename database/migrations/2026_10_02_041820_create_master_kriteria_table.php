<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('master_kriteria', function (Blueprint $table) {

            $table->id();

            // Nomor urut kriteria 1-30
            $table->integer('nomor_kriteria');

            // Point 1-10
            $table->integer('point');

            // PLAN / DO / CHECK / ACT
            $table->enum('kategori', [
                'PLAN',
                'DO',
                'CHECK',
                'ACT'
            ]);

            // Bobot kategori
            $table->decimal('bobot', 5, 2);

            // Isi pertanyaan/kriteria
            $table->text('kriteria');

            // Bukti yang diharapkan
            $table->text('eviden_acuan')->nullable();

            // Aktif / nonaktif
            $table->enum('status', [
                'aktif',
                'nonaktif'
            ])->default('aktif');

            $table->timestamps();

            $table->unique('nomor_kriteria');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('master_kriteria');
    }
};