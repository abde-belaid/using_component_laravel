<?php

namespace Database\Seeders;

use App\Models\Permis as ModelsPermis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class permisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsPermis::factory(10)->create();
    }
}
