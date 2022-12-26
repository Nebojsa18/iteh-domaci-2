<?php

namespace App\Http\Controllers;

use App\Models\Korisnik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KorisnikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //GET
    {
        return Korisnik::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //POST
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string|max:50',
            'prezime' => 'required|string|max:50',
            'br_voz_doz' => 'required|string|max:13', 
            'datum_rodjenja' => 'required|string',
            
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $d = Korisnik::create([
            'ime' => $request->ime, 
            'prezime' => $request->prezime, 
            'br_voz_doz' => $request->br_voz_doz,
            'datum_rodjenja' => $request->datum_rodjenja, 
           


        ]);
        $d->save();
        return response()->json(['Objekat je  kreiran', $d]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Korisnik  $korisnik
     * @return \Illuminate\Http\Response
     */
    public function show( $id) //GET
    {
        return Korisnik::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Korisnik  $korisnik
     * @return \Illuminate\Http\Response
     */
    public function edit(Korisnik $korisnik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Korisnik  $korisnik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id) //PUT
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'string|max:50',
            'prezime' => 'string|max:50',
            'br_voz_doz' => 'string|max:50', 
            'datum_rodjenja' => 'string|max:13',
            
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $d = Korisnik::find($id);
        if($d){
            $d->ime=$request->ime;
            $d->prezime=$request->prezime;
            $d->br_voz_doz=$request->br_voz_doz;
            $d->datum_rodjenja=$request->datum_rodjenja;
   

            $d->save();
            return response()->json( ["Uspesno izmenjeno!",$d]);
        }else{
            return response()->json("Objekat ne postoji u bazi");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Korisnik  $korisnik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //delete
    {
        $p =  Korisnik::find($id);
        if($p){
             $p->delete();
             return response()->json(["Objekat obrisan",$p]);
        }else{
             return response()->json(["Greska"]);
        }
    }
}
