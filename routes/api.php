<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KorisnikController;
use App\Http\Controllers\RentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

 Route::get('/korisnik',[KorisnikController::class,'index']);
 Route::get('/korisnik/{id}',[KorisnikController::class,'show']);


 Route::get('/rent',[RentController::class,'index']);
 Route::get('/rent/{id}',[RentController::class,'show']);


 Route::post('/register',[AuthController::class,'register']);
 Route::post('/login',[AuthController::class,'login']);



 Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout',[AuthController::class,'logout']);

    Route::delete('/korisnik/{id}',[KorisnikController::class,'destroy']);
    Route::post('/korisnik',[KorisnikController::class,'store']);
    Route::put('/korisnik/{id}',[KorisnikController::class,'update']);
 });

