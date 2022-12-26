<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KorisnikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'br_voz_doz' => $this->faker->numerify("###########"),
            'datum_rodjenja' =>  $this->faker->date($format='Y-m-d',$max='now'),
           
        ];
    }
}
