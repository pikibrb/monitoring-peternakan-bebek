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
        Schema::create('penjualan', function (Blueprint $table) {
          $table->id();
            $table->date('tanggal_penjualan');
            $table->string('nama_pembeli');
            $table->integer('jumlah_telur_dijual');
            $table->decimal('harga_satuan', 12, 2);
            $table->decimal('total_penjualan', 15, 2);
            $table->string('status_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
