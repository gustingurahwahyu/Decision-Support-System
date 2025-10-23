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
        Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengguna');
            $table->string('preferensi_wisata');
            $table->string('suasana');
            $table->boolean('aktivitas_air');
            $table->boolean('dekat_pantai');
            $table->boolean('kuliner');
            $table->string('hasil_rekomendasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responses');
    }
};
