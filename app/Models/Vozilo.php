<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vozilo extends Model
{
    use HasFactory;
    protected $fillable = [
        'marka',
        'model',
        'godiste',
        'tip',
        'broj_vrata'
        

    ];
    public function rente()
    {
         return $this->hasMany(Rent::class);
    }
}
