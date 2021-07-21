@extends('layouts.app')

@section('content')
    <h1>Ajouter un livre</h1>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Titre du livre</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Titre">
        </div>
        <div class="form-group">
            <label for="ISBN">Titre du livre</label>
            <input type="text" name="ISBN" id="ISBN" class="form-control" placeholder="Code ISBN">
        </div>
        <div class="form-group">
            <label for="price">Titre du livre</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="Prix de l'article">
        </div>
        <div class="form-group">
            <label for="auteur">Auteur</label>
            <select name="auteur" id="auteur" class="form-control">
                <option value="" selected disabled>Choisir un auteur</option>
                @foreach($auteurs as $auteur)
                    <option value="{{ $auteur->id }}">{{ $auteur->prenom }} {{ $auteur->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="text-center mt-5">
            <button type="submit" class="btn btn-danger">Soumettre</button>
        </div>
    </form>
@endsection