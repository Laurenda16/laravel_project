<?php

namespace Database\Factories;

//use Illuminate\Database\Factories\Etudiant;

use App\Models\Etudiant as ModelsEtudiant;
use App\Models\EtudiantModel;
use Illuminate\Database\Factorie\Etudiant;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
protected $model = EtudiantModel::class;

    public function definition(): array
    {
        return [

            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName(),
            'classe_id' => rand(1, 7),

        ];
    }
}
