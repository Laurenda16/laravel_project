<?php

namespace Database\Factories;

use App\Models\Etudiant as ModelsEtudiant;
use Illuminate\Database\Factories\Etudiant;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EtudiantFactory extends Factory
{
    
    protected $model = ModelsEtudiant::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            //
        ];
    }
}