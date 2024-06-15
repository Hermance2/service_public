<?php

use App\Http\Controllers\ActedeceController;
use App\Http\Controllers\ActenaissController;
use App\Http\Controllers\CitoyenController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SouserviceController;
use App\Mail\HelloMail;
use App\Mail\testMail;
use Illuminate\Support\Facades\Mail;
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
Route::get('/Connexion', function () {
    return view('/Connexion');
});
Route::get('/DashBoard', function () {
    return view('DashBoard');
});
Route::get('SAP', function () {
    return view('souservice/SAP');
});
Route::get('/ActeDeNaissance', function () {
    return view('Acte_de_naissance/ActeDeNaissance');
});
Route::get('/Historique', function(){
    return view('historique');
});
Route::get('/ListeCitoyens', function(){
    return view('citoyen/liste');
});
Route::get('/ActeDeDeces', function(){
    return view('/Acte_de_deces/ActeDeDeces');
});
Route::get('/ConnexionAdmin', function(){
    return view('ConnexionAdmin');
});
//service
Route::get('/service', [ServiceController::class, 'liste_service'])->name('listeService');
//ajout 
Route::get('/ajout', [ServiceController::class, 'ajout_service']);
//traitement ajout
Route::post('/ajout/traitement', [ServiceController::class, 'ajout_service_traitement']);
//update
Route::get('/update/{id}', [ServiceController::class, 'update_service']);
//traitement update
Route::get('/update/{id}-update', [ServiceController::class, 'update_service']);




//sousservice
Route::get('/service/souService', [SouserviceController::class, 'liste_sousservice'])->name('listeSouservice');
//ajout 
Route::get('/service/souService/ajout', [SouserviceController::class, 'ajout_sousservice']);
//traitement ajout
Route::post('/service/souService/ajout/traitement', [SouserviceController::class, 'ajout_sousservice_traitement']);
//update
Route::get('/service/souService/update/{id}', [SouserviceController::class, 'update_sousservice']);
//traitement update
Route::post('/service/souService/update/{id}-update', [SouserviceController::class, 'update_sousservice_traitement']);


//citoyen
Route::get('/citoyen', [CitoyenController::class, 'liste_citoyen'])->name('listeCitoyen');
//ajout 
Route::get('/citoyen/ajout', [CitoyenController::class, 'ajout_citoyen']);
//traitement ajout
Route::post('/citoyen/ajout/traitement', [CitoyenController::class, 'ajout_citoyen_traitement']);
//update
Route::get('/citoyen/update/{id}', [CitoyenController::class, 'update_citoyen']);
//traitement update
Route::post('/citoyen/update/{id}-traitement', [CitoyenController::class, 'update_citoyen_traitement']);

Route::get('/Connexion', function () {
    return view('Connexion');
});

//actedenaissance
Route::get('/actenaissance', [ActenaissController::class, 'liste_actenaissance']);
//ajout 
Route::get('/actenaissance/ajout', [ActenaissController::class, 'ajout_actenaissance']);
//traitement ajout
Route::post('/actenaissance/ajout/traitement', [ActenaissController::class, 'ajout_actenaissance_traitement']);
//update
Route::get('/actenaissance/update/{id}', [ActenaissController::class, 'update_actenaissance']);
//traitement update
Route::post('/actenaissance/update/{id}-traitement', [ActenaissController::class, 'update_actenaissance_traitement']);


//actedece
Route::get('/actedece', [ActedeceController::class, 'liste_actedece']);
//ajout 
Route::get('/actedece/ajout', [ActedeceController::class, 'ajout_actedece']);
//traitement ajout
Route::get('/actedece/ajout/traitement', [ActedeceController::class, 'ajout_actedece_traitement']);
//update
Route::get('/actedece/update/{id}', [CitoyenController::class, 'update_actedece']);
//traitement update
Route::post('/actedece/update/{id}-traitement', [CitoyenController::class, 'update_actedece_traitement']);



Route::get('/sendMail',function(){
    Mail::to("hermancerandria@gmail.com")->send(new HelloMail());
    return "Email sent successfully!";
});
