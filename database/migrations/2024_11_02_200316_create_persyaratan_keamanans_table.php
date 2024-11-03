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
        Schema::create('persyaratan_keamanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_aset')->constrained('informasi_aset_kritis')->onDelete('cascade');
            $table->enum('jenis_persyaratan_keamanan', ['kerahasiaan', 'integritas', 'ketersediaan']);
            $table->boolean('prioritas');
            $table->string('kebutuhan', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persyaratan_keamanans');
    }
};
