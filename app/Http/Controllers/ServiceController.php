<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function ajout_service(){
        //ajout service  miretourner interface formulaire
        return view('servicee.ajout');//micreer dossier service de 
    }

    public function ajout_service_traitement(ServiceRequest $request){
        //traitement ny formulaire ajout 
        $service = Service::create($request->validated());
        return redirect()->route('listeService')->with('Succée,la service a été bien enregistrer');
    }

    public function liste_service(){
        //liste nu service
        $services = Service::all();
        return view('servicee.liste',[
            'services'=>$services
        ]);
        
    }

}
