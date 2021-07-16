@extends('layouts.app')

@section('content')
    <h1>All Authors</h1>
    <ol>
        @foreach($authors as $author)
            <li><a href="{{ route("authorpage", $author->id) }}" class="fw-bold">{{ $author->prenom }} {{ $author->nom }}</a> </li>
        @endforeach
    </ol>
@endsection