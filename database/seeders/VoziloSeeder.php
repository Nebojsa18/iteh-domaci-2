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
        $v1->marka="AAA";
        $v1->model="BB";
        $v1->godiste=2015;
        $v1->tip="CC";
        $v1->broj_vrata=5;
        $v1->save();

        $v1= new Vozilo();
        $v1->marka="AAA";
        $v1->model="BB";
        $v1->godiste=2015;
        $v1->tip="CC";
        $v1->broj_vrata=5;
        $v1->save();


        $v1= new Vozilo();
        $v1->marka="AAA";
        $v1->model="BB";
        $v1->godiste=2015;
        $v1->tip="CC";
        $v1->broj_vrata=5;
        $v1->save();
        
    }
}
