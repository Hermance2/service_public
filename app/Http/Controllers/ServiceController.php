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

    // Create a new service instance and assign the request values
    $service = new Service();
    $service->nom_service = $request->input('nom_service'); 
    $service->lieu = $request->input('lieu');

    $service->save();

    // Redirect to the list service route with a success message
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
