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

    public function ajout_service_traitement(Request $request)
{
    // Validate the request
    $request->validate([
        'nom_service' => 'required',
        'lieu' => 'required'
    ]);
    $service = new Service();
    $service->nom_service = $request->input('nom_service'); 
    $service->lieu = $request->input('lieu');

    $service->save();
    return redirect()->route('listeService')->with('success', 'Le service a été bien enregistré');
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
        return  view('servicee.modification',[
            'services'=>$services
        ]);
    }
    
    public function update_citoyen_traitement($id,Request $request){
        //traitement formulaire update
        $request->validate([
            'nom_service' => 'required',
            'lieu' => 'required'
        ]);
        $service = Service::find($id);
        $service->nom_service = $request->input('nom_service'); 
        $service->lieu = $request->input('lieu');
        $service->update();
        return redirect()->route('listeService')->with('Succée,la service a été bien modifiée');
    }
}
