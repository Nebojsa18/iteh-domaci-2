<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IzmeniTabeluVozilos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vozilos', function (Blueprint $table) {
           
            $table->integer('broj_vrata');
    
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vozilos', function (Blueprint $table) {
           
            $table->removeColumn('broj_vrata');
    
          
        });
    }
}
