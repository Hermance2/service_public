<?php

namespace App\Http\Controllers;

use App\Http\Requests\CitoyenRequest;
use App\Models\Citoyen;
use Illuminate\Http\Request;

class CitoyenController extends Controller
{
    public function ajout_citoyen(){
        //ajout de citoyen miretourner interface formulaire
        return view('citoyen.ajout');
    }

    public function ajout_citoyen_traitement(CitoyenRequest $request){
        //traitement ajout de citoyen
        $citoyen = Citoyen::created($request->validated());
        return redirect()->route("listeCitoyen")->with('Succée',"le citoyen a été bien enregistre");

    }

    public function liste_citoyen(){
        //liste de citoyen
        $citoyens = Citoyen::all();
        return view('citoyen.liste',[
            'citoyens' => $citoyens
        ]);
    }

    public function update_citoyen($id){
        //mise à jour citoyen miretourner interface formulaire avec donnée
        $citoyens = Citoyen::find($id);
        return view('citoyen.update',[
            'citoyens'=>$citoyens
        ]);
    }

    public function update_citoyen_traitement($id,CitoyenRequest $request){
        //traitement formulaire update
       $citoyen = Citoyen::update($request->validate());
       return redirect()->route("listeCitoyen")->with('Succée',"le citoyen a été bien modifiée");
    }
}
