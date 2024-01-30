<?php

namespace Database\Factories;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rules\Enum;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\permis>
 */
class permisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "type"=>fake()->randomElement(['c' ,'b', 'a']),
            "dateExperation"=>fake()->date(),
            "etudiant_id"=>Etudiant::all()->random()->id
        ];
    }
}
