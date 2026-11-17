<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DPproyekFactory extends Factory
{
    public function definition(): array
    {
        return [
            'Uraian_Jenis_Proyek' => fake()->randomElement(['Proyek Utama', 'Proyek Pendukung', 'Proyek Kantor Cabang']),
            'Nib' => fake()->numerify('#############'),
            'Nama_Perusahaan' => fake()->company(),
            'Tanggal_Terbit_OSS' => fake()->date(),
            'Uraian_Status_Penanaman_Modal' => fake()->randomElement(['PMA', 'PMDN']),
            'Uraian_Jenis_Perusahaan' => fake()->randomElement(['PT', 'CV', 'Perorangan']),
            'Uraian_Risiko_Proyek' => fake()->randomElement(['Rendah', 'Menengah Rendah', 'Menengah Tinggi', 'Tinggi']),
            'Nama_Proyek' => fake()->sentence(3),
            'Uraian_Skala_Usaha' => fake()->randomElement(['Usaha Mikro', 'Usaha Kecil', 'Usaha Menengah', 'Usaha Besar']),
            'Alamat_Usaha' => fake()->address(),
            'Kab_Kota_Usaha' => fake()->city(),
            'Kecamatan_Usaha' => fake()->citySuffix() . ' ' . fake()->lastName(),
            'Kelurahan_Usaha' => fake()->lastName(),
            'Day_Of_Tanggal_Pengajuan_Proyek' => fake()->date(),
            'KBLI' => fake()->numerify('#####'),
            'Judul_KBLI' => fake()->sentence(4),
            'KL_Sektor_Pembina' => fake()->randomElement(['Kementerian Perindustrian', 'Kementerian Perdagangan', 'Kementerian Pertanian']),
            'Luas_Tanah' => (string) fake()->numberBetween(100, 10000),
            'Satuan_Tanah' => fake()->randomElement(['m2', 'Ha']),
            'Jumlah_Investasi' => (string) fake()->numberBetween(10000000, 5000000000),
            'TKI' => (string) fake()->numberBetween(1, 200),
        ];
    }
}

