{{-- @dd($etudiant->nom) --}}

@extends('index.layouts')
@section('content')
    <div class="container">
        <form action="{{route('etudiants.update',$etudiant->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="row m-2">
                <input type="hidden" name="id" value="{{$etudiant->id}}" class="form-control col" >
                <label for="nom" class="form-label col">Entrez le nom : </label>
                <input type="text" name="nom" value="{{$etudiant->nom}}" class="form-control col" >
            </div>
            <div class="row m-2">
                <label for="prenom" class="form-label col">Entrez le prenom : </label>
                <input type="text" name="prenom" value="{{$etudiant->prenom}}" class="form-control col" >
            </div>

            <div class="row m-2">
                <label for="prenom" class="form-label col">Entrez le profile : </label>
                <input type="text" name="profile" value="{{$etudiant->profile}}" class="form-control col" >
            </div>

            <div class="text-center mt-2">

                <input type="submit" class="btn btn-info col w-50" value="Ajouter ">
            </div>
        </form>
    </div>
@endsection
