<?php

namespace Database\Factories;

use App\Models\Chauffeur;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChauffeurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chauffeur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            //'numero_chauffeur' => $this->faker->unique()->randomNumber(6),
            'numero_chauffeur' => 'SN-' . $this->faker->unique()->randomNumber(6), // Format spécifique pour le Sénégal
            'experience' => $this->faker->numberBetween(1, 20),
            'numero_permis' => $this->faker->unique()->randomNumber(8),
            'date_emission' => $this->faker->date(),
            'date_expiration' => $this->faker->date(),
            'categorie' => $this->faker->randomElement(['A', 'B', 'C', 'D']),
            'evaluation' => $this->faker->optional()->randomFloat(2, 1, 5),
            'contrat' => $this->faker->optional()->text,
            'statut' => $this->faker->randomElement(['actif', 'en_congé', 'hors_service']),
            'photo' => $this->faker->optional()->imageUrl(),
        ];
    }
}
