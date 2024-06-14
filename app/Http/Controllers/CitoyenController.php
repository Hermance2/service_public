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

    public function ajout_citoyen_traitement(Request $request){
        //traitement ajout de citoyen
        $request->validate([
            'nomCitoyen'=> 'required',
            'prenomCitoyen' => 'required',
            'email' => 'required',
            'numCIN' => 'required',
            'telephone' => 'required',
            'adresse'=> 'required'
        ]);

        $citoyen = new Citoyen();
        $citoyen -> nomCitoyen = $request->input('nomCitoyen');
        $citoyen -> prenomCitoyen = $request->input('prenomCitoyen');
        $citoyen -> email = $request->input('email');
        $citoyen -> numCIN = $request->input('numCIN');
        $citoyen -> telephone = $request->input('telephone');
        $citoyen -> adresse = $request->input('adresse');
        $citoyen     ->save();
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

    public function update_citoyen_traitement($id,Request $request){
        //traitement formulaire update
        $request->validate([
        'nomCitoyen'=> 'required',
        'prenomCitoyen' => 'required',
        'email' => 'required',
        'numCIN' => 'required',
        'telephone' => 'required',
        'adresse'=> 'required'
    ]);
    $citoyen = Citoyen::find($id);
    $citoyen -> nomCitoyen = $request->input('nomCitoyen');
    $citoyen -> prenomCitoyen = $request->input('prenomCitoyen');
    $citoyen -> email = $request->input('email');
    $citoyen -> numCIN = $request->input('numCIN');
    $citoyen -> telephone = $request->input('telephone');
    $citoyen -> adresse = $request->input('adresse');
    $citoyen ->update();
       return redirect()->route("listeCitoyen")->with('Succée',"le citoyen a été bien modifiée");
    }
}
