<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NIBFactory extends Factory
{
    public function definition(): array
    {
        return [
            'NIB' => fake()->numerify('#############'),
            'Day_Of_Tanggal_Terbit_Oss' => fake()->date(),
            'Nama_Perusahaan' => fake()->company(),
            'Status_Penanaman_Modal' => fake()->randomElement(['PMA', 'PMDN']),
            'Uraian_Jenis_Perusahaan' => fake()->randomElement(['PT', 'CV', 'Perorangan']),
            'Uraian_Skala_Usaha' => fake()->randomElement(['Usaha Mikro', 'Usaha Kecil', 'Usaha Menengah', 'Usaha Besar']),
            'Alamat_Perusahaan' => fake()->address(),
            'Kelurahan' => fake()->lastName(),
            'Kecamatan' => fake()->lastName(),
            'Kab_Kota' => fake()->city(),
        ];
    }
}