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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kendaraan', 100);
            $table->enum('kategori', ['Penumpang', 'Barang'])->nullable();
            $table->decimal('bbm', 10, 2);
            $table->date('servis_akhir');
            $table->enum('pemilik', ['Perusahaan', 'Menyewa'])->nullable();

            // $table->foreign('jumlah_bbm')->references('id')->on('bbm');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
