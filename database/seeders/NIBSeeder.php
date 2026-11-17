<?php

namespace Database\Seeders;

use App\Models\NIB;
use Illuminate\Database\Seeder;

class NIBSeeder extends Seeder
{
    public function run(): void
    {
        NIB::factory()->count(50)->create();
    }
}