@extends('layouts.app')

@section('content')
    <h1>Auteur</h1>
    <p> {{ $author->prenom }} {{ $author->nom }} </p>
    <ol>
        @foreach ($author->livres as $book)
            <li><a href="{{ route('bookpage', $book->id ) }}">{{ $book->nom }}</li>
        @endforeach
    </ol>
@endsection