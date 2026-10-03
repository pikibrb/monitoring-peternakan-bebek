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
        Schema::create('monitoring_pertumbuhan', function (Blueprint $table) {
           $table->id();
            $table->foreignId('kelompok_bebek_id')->constrained('kelompok_bebek')->cascadeOnDelete();
            $table->date('tanggal_catat');
            $table->integer('umur_hari');
            $table->decimal('berat_rata_rata', 8, 2);
            $table->decimal('pakan_diberikan_kg', 8, 2);
            $table->string('kondisi_kesehatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitoring_pertumbuhan');
    }
};
