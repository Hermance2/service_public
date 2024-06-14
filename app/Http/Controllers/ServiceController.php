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

    public function ajout_service_traitement(Request $request){
        //traitement ny formulaire ajout 
        //$service = Service::create($request->validated());
        $request->validate([
            'nom_service' => 'required',
            'lieu' => 'required'
        ]);
        $service = new Service();
        $service -> $request->nom_service;
        $service -> $request->lieu;
        $service -> save();
        return redirect()->route('listeService')->with('Succée,la service a été bien enregistrer');
    }

    public function liste_service(){
        //liste nu service
        $services = Service::all();
        return view('servicee.liste',[
            'services'=>$services
        ]);
        
    }

    public function update_service($id){
        //traitement ny formulaire ajout 
        $services = Service::find($id);
        return  view('servicee.update',[
            'services'=>$services
        ]);
    }
    
    public function update_citoyen_traitement($id,ServiceRequest $request){
        //traitement formulaire update
        $service = Service::update($request->validate());
        return redirect()->route('listeService')->with('Succée,la service a été bien modifiée');
    }
}
