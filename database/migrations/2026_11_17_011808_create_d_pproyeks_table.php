<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dpproyek', function (Blueprint $table) {
            $table->id();
            $table->string('Uraian_Jenis_Proyek')->nullable();
            $table->string('Nib')->nullable();
            $table->string('Nama_Perusahaan')->nullable();
            $table->string('Tanggal_Terbit_OSS')->nullable();
            $table->string('Uraian_Status_Penanaman_Modal')->nullable();
            $table->string('Uraian_Jenis_Perusahaan')->nullable();
            $table->string('Uraian_Risiko_Proyek')->nullable();
            $table->string('Nama_Proyek')->nullable();
            $table->string('Uraian_Skala_Usaha')->nullable();
            $table->text('Alamat_Usaha')->nullable();
            $table->string('Kab_Kota_Usaha')->nullable();
            $table->string('Kecamatan_Usaha')->nullable();
            $table->string('Kelurahan_Usaha')->nullable();
            $table->string('Day_Of_Tanggal_Pengajuan_Proyek')->nullable();
            $table->string('KBLI')->nullable();
            $table->string('Judul_KBLI')->nullable();
            $table->string('KL_Sektor_Pembina')->nullable();
            $table->string('Luas_Tanah')->nullable();
            $table->string('Satuan_Tanah')->nullable();
            $table->string('Jumlah_Investasi')->nullable();
            $table->string('TKI')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dpproyek');
    }
};