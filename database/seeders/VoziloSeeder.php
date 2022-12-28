<?php

namespace Database\Seeders;

use App\Models\Vozilo;
use Illuminate\Database\Seeder;

class VoziloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $v1= new Vozilo();
        $v1->marka="VW";
        $v1->model="Up";
        $v1->godiste=2015;
        $v1->tip="Ekonomska klasa";
        $v1->broj_vrata=5;
        $v1->save();

        $v1= new Vozilo();
        $v1->marka="Fiat";
        $v1->model="500";
        $v1->godiste=2014;
        $v1->tip="Ekonomska klasa";
        $v1->broj_vrata=5;
        $v1->save();


        $v1= new Vozilo();
        $v1->marka="Renault";
        $v1->model="Clio";
        $v1->godiste=2017;
        $v1->tip="B grupa";
        $v1->broj_vrata=4;
        $v1->save();

        $v1= new Vozilo();
        $v1->marka="Ford";
        $v1->model="Fiesta";
        $v1->godiste=2017;
        $v1->tip="B grupa";
        $v1->broj_vrata=4;
        $v1->save();
        
    }
}
