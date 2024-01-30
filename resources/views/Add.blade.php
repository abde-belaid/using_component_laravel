@extends('index.layouts')
@section('content')
    <div class="container">

        <form action='ValiderAdd' method="post" enctype="multipart/form-data">
            @csrf
            <div class="row m-2">
                <label for="nom" class="form-label col">Entrez le nom : </label>
                <input type="text" name="nom" class="form-control col" placeholder="Entrez le nom ">
            </div>
            <div class="row m-2">
                <label for="prenom" class="form-label col">Entrez le prenom : </label>
                <input type="text" name="prenom" class="form-control col" placeholder="Entrez le prenom ">
            </div>

            <div class="row m-2">
                <label for="prenom" class="form-label col">Entrez le profile : </label>
                <input type="text" name="profile" class="form-control col" placeholder="Entrez le profile ">
            </div>

            <div class="row m-2">
                <label for="prenom" class="form-label col">Choisir L'image : </label>
                <input type="file" name="image" class="form-control col" >
            </div>

            <div class="text-center mt-2">

                <input type="submit" class="btn btn-info col w-50" value="Ajouter ">
            </div>
        </form>
    </div>
@endsection
