<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Http\Requests\SouserviceRequest;
use App\Models\Souservice;
use Illuminate\Http\Request;

class SouserviceController extends Controller
{

    public function ajout_sousservice(){
        //ajout de sous service miretourner interface formulaire
        return view('souservice.ajout');
    }


    public function ajout_sousservice_traitement(SouserviceRequest $request){
        //traitement formulaire ajout
        $souservice = Souservice::created($request->validated());
        return redirect()->route('listeSouservice')->with('Succée','la sous-service a été bien enregistrer');
    }


    public function liste_sousservice(){
        //liste de sous service
        $souservices = Souservice::all();
        return view('souservice.liste',[
            'souservices' => $souservices
        ]);
    }

    public function update_sousservice($id){
        //mise à jour sous service miretourner interface formulaire avec donnée
        $souservices = Souservice::find($id);
        return view('souservice.update',[
            'souservice' => $souservices
        ]);
    }

    public function update_sousservice_traitement($id,SouserviceRequest $request){
        //traitement formulaire update
        $souservice = Souservice::update($request->validated());
        return redirect()->route('listeSouservice')->with('Succée','la sous-service a été bien modifiée');
    }

}
