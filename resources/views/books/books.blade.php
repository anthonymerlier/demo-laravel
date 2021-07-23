@extends('layouts.app')

@section('content')
    <h1>All Books</h1>
    <ul>
        @foreach($books as $book)
            <li><a href="{{ route("bookpage", $book->id) }}" class="fw-bold">{{ $book->nom }}</a> {{ $book->price }} €</li>
        @endforeach
    </ul>
    <div class="pagination">
        {{ $books->render() }}
    </div>
@endsection