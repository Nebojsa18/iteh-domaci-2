<?php

namespace App\Http\Resources;

use App\Models\Korisnik;
use App\Models\Vozilo;
use Illuminate\Http\Resources\Json\JsonResource;

class RentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return
        
        [
            'id'=>$this->resource->id, 
            'vozilo'=>Vozilo::find($this->resource->vozilo_id), 
            'korisnik'=>Korisnik::find($this->resource->korisnik_id), 
            'datum_od'=>$this->resource->datum_od, 
            'datum_do'=>$this->resource->datum_do, 

        ];
    }
}
