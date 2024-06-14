<?php

namespace App\Http\Controllers;

use App\Models\actedece;
use Illuminate\Http\Request;

class ActedeceController extends Controller
{
    
    
    public function liste_actedece(){
        $actesDeces = actedece::with(['citoyen', 'service'])->get();

        return view('actedece.liste', [
            'actesDeces' => $actesDeces
        ]);
    }

    public function ajout_actenaissance(){
        return view('actedece.ajout');
    }

    public function ajout_actedece_traitement(Request $request){
        $request->validate([
            'citoyens_id' => ['required'],
            'services_id' =>  ['required'],
            'nomdece' =>  ['required'],
            'prenomdece'=>  ['required'],
            'datedece' =>  ['required'],
            'lieu' =>  ['required']
        ]);
        $actedece = new actedece();
        $actedece ->citoyens_id->$request->input('citoyens_id');
        $actedece ->services_id->$request->input('services_id');
        $actedece ->nomdece->$request->input('nomdece');
        $actedece ->datedece->$request->input('datedece');
        $actedece ->lieu->$request->input('lieu');
        $actedece->save();

    }
    
    public function update_actenaissance($id){
        $actedeces = actedece::find($id);
        return view('update',[
            'actedectes' =>$actedeces
        ]);

    }

    public function update_actenaissance_traitement($id ,Request $request){
        $request->validate([
            'citoyens_id' => ['required'],
            'services_id' =>  ['required'],
            'nomdece' =>  ['required'],
            'prenomdece'=>  ['required'],
            'datedece' =>  ['required'],
            'lieu' =>  ['required']
        ]);

        $actedece =actedece::find($id);
        $actedece ->citoyens_id->$request->input('citoyens_id');
        $actedece ->services_id->$request->input('services_id');
        $actedece ->nomdece->$request->input('nomdece');
        $actedece ->datedece->$request->input('datedece');
        $actedece ->lieu->$request->input('lieu');
        $actedece->update();
    }
}
