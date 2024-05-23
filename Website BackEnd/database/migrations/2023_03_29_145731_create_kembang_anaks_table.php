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
        Schema::create('kembang_anaks', function (Blueprint $table) {
            $table->foreignId('id_anak');
            $table->date('tanggal');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kembang_anaks');
    }
};
