<?php

namespace Database\Seeders;

use App\Models\DPproyek;
use Illuminate\Database\Seeder;

class DPproyekSeeder extends Seeder
{
    public function run(): void
    {
        DPproyek::factory()->count(50)->create();
    }
}