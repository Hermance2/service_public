<?php

namespace App\Http\Controllers;

use App\Models\actedece;
use App\Models\actenaissance;
use Illuminate\Http\Request;

class ActenaissController extends Controller
{
    public function liste_actenaissance()
    {
        $actenaiss = actenaissance::with(['citoyen', 'service'])->get();

        return view('actedece.liste', [
            'actesDeces' => $actenaiss
        ]);
    }

    public function ajout_actenaissance()
    {
        return view('actenaissance.ajout');
    }


    public function ajout_actenaissance_traitement(Request $request)
    {
        $request->validate([
            'citoyens_id' => ['required'],
            'services_id' => ['required'],
            'nomdemandeur' => ['required'],
            'prenomdemandeur' => ['required'],
            'datenaissance' => ['required'],
            'lieunaissancance' => ['required'],
            'mere' => ['required'],
            'pere' => ['required'],
            'motif' => ['required'],
        ]);

        $actenaiss  = new actenaissance();
        $actenaiss->citoyens_id->$request->input('citoyens_id');
        $actenaiss->services_id->$request->input('services_id');
        $actenaiss->nomdemandeur->$request->input('nomdemandeur');
        $actenaiss->prenomdemandeur->$request->input('prenomdemandeur');
        $actenaiss->datenaissance->$request->input('datenaissance');
        $actenaiss->lieunaissancance->$request->input('lieunaissancance');
        $actenaiss->mere->$request->input('mere');
        $actenaiss->pere->$request->input('pere');
        $actenaiss->motif->$request->input('motif');
        $actenaiss->save();
        return redirect()->route('/actedece')->with('Succée', "l'acte a été bien enregistre");
    }


    public function update_actenaissance($id)
    {
        $actenaiss = actenaissance::find($id);

        return view('actenaissance.modification', [
            'actenaiss' => $actenaiss
        ]);
    }


    public function update_actenaissance_traitement($id, Request $request)
    {
        $request->validate([
            'citoyens_id' => ['required'],
            'services_id'  => ['required'],
            'nomdemandeur'  => ['required'],
            'prenomdemandeur' => ['required'],
            'datenaissance'  => ['required'],
            'lieunaissancance'  => ['required'],
            'mere'  => ['required'],
            'pere'  => ['required'],
            'motif' => ['required']
        ]);

        $actenaiss  =  actenaissance::find($id);
        $actenaiss->citoyens_id->$request->input('citoyens_id');
        $actenaiss->services_id->$request->input('services_id');
        $actenaiss->nomdemandeur->$request->input('nomdemandeur');
        $actenaiss->prenomdemandeur->$request->input('prenomdemandeur');
        $actenaiss->datenaissance->$request->input('datenaissance');
        $actenaiss->lieunaissancance->$request->input('lieunaissancance');
        $actenaiss->mere->$request->input('mere');
        $actenaiss->pere->$request->input('pere');
        $actenaiss->motif->$request->input('motif');
        $actenaiss->update();
        return redirect()->route('/actedece')->with('Succée', "l'acte a été bien enregistre");
    }
}
