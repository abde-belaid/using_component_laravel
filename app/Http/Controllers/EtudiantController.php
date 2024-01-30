<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckAge;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class EtudiantController extends Controller
{

    public function __construct()
    {
        $this->middleware(CheckAge::class);
        // file append est permet de conserver le ancien contenu
        file_put_contents(__DIR__."/newfile.docs","c'est le contenue que je veux placer dans le fichier",FILE_APPEND);
        // $this->middleware(CheckAge::class)->except('index');
 
        // $this->middleware('log')->only('index');
 
        // $this->middleware('subscribed')->except('store');
    }








    public function index()
    {
        dd("test");
        return view("welcome", ['etudiants' => Etudiant::paginate(10)]);
    }

    // public function etudiant(){
    //     $data=[];

    //     $d["nom"]="Alami";
    //     $d["prenom"]="Ahmed";
    //     $d["post"]="Fourmatrice";
    //     $d["module"]=["M101","M102","M103"];
    //     array_push($data,$d);
    //     $d["nom"]="Rami";
    //     $d["prenom"]="Amina";
    //     $d["post"]="Fourmatrice";
    //     $d["module"]=["M106","M109","M105"];
    //     array_push($data,$d);
    //     $d["nom"]="Farouki";
    //     $d["prenom"]="Yassin";
    //     $d["post"]="Developpeur";
    //     $d["module"]=["M201","M202","M203"];
    //     array_push($data,$d);
    //     // return Response::json($data);
    //     // dd($data);
    //     return view("affichage",["data"=>$data]);
    // }



    // public function create()
    // {
    //     return view("Add");
    // }

    // public function store(Request $request)
    // {
    //     // $inputvalues=$request->all();


    //     $etudiant = new Etudiant;
    //     $etudiant->nom = $request->nom;
    //     $etudiant->prenom = $request->prenom;
    //     $etudiant->profile = $request->profile;

    //     $image = $request->file('image');

    //     if ($image) {
    //         $destination = "images/";
    //         $nomImage = Str::random(10) . "." . $image->getClientOriginalExtension();
    //         $image->move($destination, $nomImage);
    //     }

    //     $etudiant->image = $nomImage;
    //     $etudiant->save();

    //     return redirect(route('etudiants.liste'))->with('resultat', 'l\'etudiant est inserer avec succès ');
    // }

    // public function edit(Request $request)
    // {
    //     $etudiant = Etudiant::findOrfail($request->id);
    //     return view('edit', compact('etudiant'));
    // }
    // public function update(Request $request)
    // {
    //     // echo $request->nom;
    //     $etudiant = Etudiant::findOrFail($request->id);
    //     $etudiant->nom = $request->nom;
    //     $etudiant->prenom = $request->prenom;
    //     $etudiant->profile = $request->profile;
    //     $etudiant->update();


    //     return redirect(route('etudiants.liste'))->with('resultat', 'l\'etudiant est Modifier avec succès ');
    // }
    // public function delete(Request $request)
    // {
    //     // echo $request->nom;
    //     $etudiant = Etudiant::findOrFail($request->id);

    //     $etudiant->delete();


    //     return redirect(route('etudiants.liste'))->with('resultat', 'l\'etudiant est supprimer avec succès ');
    // }
}
