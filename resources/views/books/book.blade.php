@extends('layouts.app')

@section('content')
    <h1>Titre du livre</h1>
    <p> {{ $book->nom }} </p>
    <p>Auteur : <a href="{{ route('authorpage', $book->author->id) }}"> {{ $book->author->prenom }} {{ $book->author->nom }}</a> </p>
@endsection