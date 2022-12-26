<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korisnik extends Model
{
    use HasFactory;
    protected $fillable = [
        'ime',
        'prezime',
        'br_voz_doz',
        'datum_rodjenja',

    ];

    public function rente()
    {
         return $this->hasMany(Rent::class);
    }





}
