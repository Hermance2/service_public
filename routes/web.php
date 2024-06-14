<?php

use App\Http\Controllers\CitoyenController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SouserviceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('acceuil');
});
//service
Route::get('/service',[ServiceController::class,'liste_service'])->name('listeService');
//ajout 
Route::get('/ajout',[ServiceController::class,'ajout_service']);
//traitement
Route::post('/ajout/traitement',[ServiceController::class,'ajout_service_traitement']);


//sousservice
Route::get('/service/souService',[SouserviceController::class,'liste_sousservice'])->name('listeSouservice');
//ajout 
Route::get('/service/souService/ajout',[SouserviceController::class,'ajout_sousservice']);
//traitement
Route::post('/service/souService/ajout/traitement',[SouserviceController::class,'ajout_sousservice_traitement']);

//citoyen
Route::get('/citoyen',[CitoyenController::class,'liste_citoyen'])->name('listeCitoyen');
//ajout 
Route::get('/citoyen/ajout',[CitoyenController::class,'ajout_citoyen']);
//traitement
Route::post('/citoyen/ajout/traitement',[CitoyenController::class,'ajout_citoyen_traitement']);

Route::get('/Connexion', function(){
    return view('Connexion');
});
