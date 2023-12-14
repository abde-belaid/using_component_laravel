<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EtudiantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table("etudiants")->insert([
        //     'nom'=>'alami',
        //     'prenom'=>'ahmed',  
        //     'profile'=>'Formateur'
        // ]);

        Etudiant::factory(50)->create();
        
    }
}
