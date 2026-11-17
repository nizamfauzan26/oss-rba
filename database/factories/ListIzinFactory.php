<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListIzinFactory extends Factory
{
    public function definition(): array
    {
        return [
            'Permohonan_Izin' => fake()->numerify('PI-########'),
            'Nama_Perusahaan' => fake()->company(),
            'Nib' => fake()->numerify('#############'),
            'Day_Of_Tanggal_Terbit_OSS' => fake()->date(),
            'Uraian_Status_Penanaman_Modal' => fake()->randomElement(['PMA', 'PMDN']),
            'Provinsi' => 'Jawa Barat',
            'Kab_Kota' => fake()->city(),
            'Kecamatan' => fake()->lastName(),
            'Kelurahan' => fake()->lastName(),
            'ID_Proyek' => fake()->numerify('PRY-######'),
            'Kd_Resiko' => fake()->randomElement(['R', 'MR', 'MT', 'T']),
            'Day_Of_Tgl_Izin' => fake()->date(),
            'Uraian_Jenis_Perizinan' => fake()->randomElement(['Izin Lokasi', 'Izin Lingkungan', 'Sertifikat Standar']),
            'Nama_Documen' => fake()->words(3, true),
            'Uraian_Kewenangan' => fake()->randomElement(['Pusat', 'Provinsi', 'Kabupaten/Kota']),
            'Status_Perizinan' => fake()->randomElement(['Terbit', 'Proses', 'Ditolak']),
            'Kewenangan' => fake()->randomElement(['Pusat', 'Provinsi', 'Kab/Kota']),
            'KL_Sektor' => fake()->randomElement(['Perindustrian', 'Perdagangan', 'Pertanian']),
        ];
    }
}