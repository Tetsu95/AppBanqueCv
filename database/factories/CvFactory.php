<?php

namespace Database\Factories;

use App\Models\Cv;
use Illuminate\Database\Eloquent\Factories\Factory;

class CvFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cv::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ville= $this->faker->city;
        $pays= $this->faker->country;
        return [
            "nom_cv" => $this->faker->name,
            "nom" => $this->faker->lastName,
            "prenoms" => $this->faker->firstName,
            "date_naissance" => $this->faker->dateTimeBetween("1980-01-01", "2007-12-30"),
            "lieu_naissance" => "$pays, $ville",
            "type_profil" => $this->faker->name("Stagiaire Informaticien"),
            "email"=> $this->faker->unique()->safeEmail(),
            "telephone1"=> $this->faker->phoneNumber,
            "telephone2"=> $this->faker->phoneNumber,
            "adresse" => $this->faker->address,
            "photo" => $this->faker->imageUrl(),
        ];
    }
}
