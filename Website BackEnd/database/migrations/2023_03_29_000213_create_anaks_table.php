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
        Schema::create('anaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('usia');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->string('nama_orangtua');
            $table->string('nohp_ortu');
            $table->string('alamat');
            $table->foreignId('id_orangtua')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anaks');
    }
};
