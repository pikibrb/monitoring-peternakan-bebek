<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produksi_telur', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelompok_bebek_id')->constrained('kelompok_bebeks')->cascadeOnDelete();
            $table->date('tanggal_produksi');
            $table->integer('jumlah_bebek_aktif');
            $table->integer('total_telur');
            $table->integer('telur_rusak');
            $table->integer('telur_layak_jual');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produksi_telur');
    }
};
