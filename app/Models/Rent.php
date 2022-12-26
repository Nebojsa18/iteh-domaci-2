<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected $fillable = [
        'korisnik_id',
        'vozilo_id',
        'datum_od',
        'datum_do',
        

    ];

    public function vozilo()
    {
         return $this->belongsTo(Vozilo::class);
    }

    public function korsnik()
    {
         return $this->belongsTo(Korisnik::class);
    }

}
