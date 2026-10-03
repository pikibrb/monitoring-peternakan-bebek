<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengurangan_populasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelompok_bebek_id')->constrained('kelompok_bebek')->cascadeOnDelete();
            $table->date('tanggal');
            $table->integer('jumlah_berkurang');
            $table->string('penyebab');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengurangan_populasi');
    }
};
