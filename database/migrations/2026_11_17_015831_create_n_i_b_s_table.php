<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nib', function (Blueprint $table) {
            $table->id();
            $table->string('NIB')->nullable();
            $table->string('Day_Of_Tanggal_Terbit_Oss')->nullable();
            $table->string('Nama_Perusahaan')->nullable();
            $table->string('Status_Penanaman_Modal')->nullable();
            $table->string('Uraian_Jenis_Perusahaan')->nullable();
            $table->string('Uraian_Skala_Usaha')->nullable();
            $table->string('Alamat_Perusahaan')->nullable();
            $table->string('Kelurahan')->nullable();
            $table->string('Kecamatan')->nullable();
            $table->string('Kab_Kota')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nib');
    }
};