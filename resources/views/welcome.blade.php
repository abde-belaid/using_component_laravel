@extends('index.layouts')
@section('content')
    <div class="container p-2">
        <div class="row m-2">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                @if (session()->has('resultat'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="text-light fa-solid fa-check btn rounded-circle border border-5 bg-success"></i>
                        &nbsp;&nbsp;
                        <strong>Success!</strong> {{ session()->get('resultat') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <a href={{ route('etudiants.add') }} class="btn btn-success text-center">Ajouter etudiant </a>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-borderless table-primary align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>profile</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($etudiants as $etudiant)
                                <tr class="table-primary">
                                    <td scope="row">{{ $etudiant->id }}</td>
                                    <td>{{ $etudiant->nom }}</td>
                                    <td>{{ $etudiant->prenom }}</td>
                                    <td>{{ $etudiant->profile }}</td>
                                    <td>
                                        <a href="Etudiant/edit/{{ $etudiant->id }}"><i class="fa-solid fa-edit"></i></a>
                                        <form action="Etudiant/delete/{{ $etudiant->id }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="text-danger fa-solid fa-trash btn"></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                    <span>{{ $etudiants->links() }}</span>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection
