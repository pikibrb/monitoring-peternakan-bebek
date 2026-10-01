<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kelompok_bebek', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_bebek');
            $table->date('tanggal_masuk');
            $table->integer('jumlah_awal');
            $table->integer('jumlah_saat_ini');
            $table->string('status_kesehatan_umum');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kelompok_bebek');
    }
};
