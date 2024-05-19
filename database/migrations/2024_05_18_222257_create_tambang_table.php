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
        Schema::create('tambang', function (Blueprint $table) {
            $table->id();
            $table->enum('wilayah', ['Pulau Pakal', 'Pulau Mabuli', 'Pulau Gee', 'Pulau Mala Mala', 'Pulau Gebe', 'Pulau Fau'])->nullable();
            $table->enum('kantor', ['Kantor Pusat', 'Kantor Cabang'])->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tambang');
    }
};
