<?php

namespace Database\Seeders;

use App\Models\Korisnik;
use App\Models\Rent;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::factory(10)->create();
       Korisnik::factory(10)->create();
       
        (new VoziloSeeder())->run();

       Rent::factory(10)->create();

    }
}
