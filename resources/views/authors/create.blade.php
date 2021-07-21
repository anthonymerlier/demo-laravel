@extends('layouts.app')

@section('content')
    <h1>Ajouter un auteur</h1>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de l'auteur">
        </div>
        <div class="form-group">
            <label for="prenom">Titre du livre</label>
            <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom de l'auteur">
        </div>
        
        <div class="text-center mt-5">
            <button type="submit" class="btn btn-danger">Soumettre</button>
        </div>
    </form>
@endsection