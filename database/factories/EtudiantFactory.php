<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'=>$this->faker->lastName(20),
            'prenom'=>$this->faker->firstName(20),
            'profile'=>$this->faker->jobTitle(),
            'image'=>$this->faker->imageUrl(),
        ];
    }
}
