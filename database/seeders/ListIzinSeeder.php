<?php

namespace Database\Seeders;

use App\Models\ListIzin;
use Illuminate\Database\Seeder;

class ListIzinSeeder extends Seeder
{
    public function run(): void
    {
        ListIzin::factory()->count(50)->create();
    }
}