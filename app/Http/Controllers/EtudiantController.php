<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    
    public function index(){
        return view("welcome", ['etudiants' => Etudiant::paginate(10)]);
    }



    public function create(){
        return view("Add");
    }

    public function store(Request $request){
        Etudiant::create($request->all());
        return redirect(route('etudiants.liste'))->with('resultat','l\'etudiant est inserer avec succès ');
    }

    public function edit(Request $request){
        $etudiant=Etudiant::findOrfail($request->id);
        return view('edit',compact('etudiant'));
       

    }
    public function update(Request $request){
        // echo $request->nom;
        $etudiant=Etudiant::findOrFail($request->id);
        $etudiant->nom=$request->nom;
        $etudiant->prenom=$request->prenom;
        $etudiant->profile=$request->profile;
        $etudiant->update();


        return redirect(route('etudiants.liste'))->with('resultat','l\'etudiant est Modifier avec succès ');
    }
    public function delete(Request $request){
        // echo $request->nom;
        $etudiant=Etudiant::findOrFail($request->id);

        $etudiant->delete();


        return redirect(route('etudiants.liste'))->with('resultat','l\'etudiant est supprimer avec succès ');
    }


}
