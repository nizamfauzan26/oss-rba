<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('list_izins', function (Blueprint $table) {
            $table->id();
            $table->string('Permohonan_Izin')->nullable();
            $table->string('Nama_Perusahaan')->nullable();
            $table->string('Nib')->nullable();
            $table->string('Day_Of_Tanggal_Terbit_OSS')->nullable();
            $table->string('Uraian_Status_Penanaman_Modal')->nullable();
            $table->string('Provinsi')->nullable();
            $table->string('Kab_Kota')->nullable();
            $table->string('Kecamatan')->nullable();
            $table->string('Kelurahan')->nullable();
            $table->string('ID_Proyek')->nullable();
            $table->string('Kd_Resiko')->nullable();
            $table->string('Day_Of_Tgl_Izin')->nullable();
            $table->string('Uraian_Jenis_Perizinan')->nullable();
            $table->string('Nama_Documen')->nullable();
            $table->string('Uraian_Kewenangan')->nullable();
            $table->string('Status_Perizinan')->nullable();
            $table->string('Kewenangan')->nullable();
            $table->string('KL_Sektor')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('list_izins');
    }
};