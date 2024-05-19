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
        Schema::create('riwayat_kendaraan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pengguna');
            $table->unsignedBigInteger('id_kendaraan');
            $table->datetime('tanggal_mulai')->nullable();
            $table->datetime('tanggal_selesai')->nullable();
            $table->string('tujuan', 100)->nullable();

            $table->foreign('id_pengguna')->references('id')->on('pengguna');
            $table->foreign('id_kendaraan')->references('id')->on('kendaraan');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_kendaraan');
    }
};
