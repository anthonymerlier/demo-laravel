@extends('layouts.app')

@section('content')
    <h1>All Books</h1>
    <ol>
        @foreach($books as $book)
            <li><a href="{{ route("bookpage", $book->id) }}" class="fw-bold">{{ $book->nom }}</a> {{ $book->price }} €</li>
        @endforeach
    </ol>
@endsection