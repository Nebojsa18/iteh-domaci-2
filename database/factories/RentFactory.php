<?php

namespace Database\Factories;

use App\Models\Korisnik;
use App\Models\Vozilo;
use Illuminate\Database\Eloquent\Factories\Factory;

class RentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'korisnik_id' => random_int(1,Korisnik::count()),
            'vozilo_id' => random_int(1,Vozilo::count()),
            'datum_od' =>  $this->faker->date($format='Y-m-d',$max='now'),
            'datum_do' =>  $this->faker->date($format='Y-m-d',$max='now'),
           
        ];
    }
}
