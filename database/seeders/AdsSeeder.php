<?php

namespace Database\Seeders;

use App\Models\ads;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ads::factory()->count(100)->create();
    }
}
