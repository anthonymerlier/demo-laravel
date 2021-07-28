@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Welcome to my Application</h1>
        <p class="text-danger">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ex fuga harum nihil officia temporibus vero similique nulla, quaerat inventore necessitatibus optio provident adipisci maiores quisquam quod illo non. Ducimus doloribus accusantium incidunt, magnam inventore assumenda dolorum voluptatum eius eum.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit eius deleniti commodi rerum minima tempora iusto ipsam, quisquam animi assumenda?</p>
                </div>
            </div>
                <div class="row">
                    <div class="col">
                        <div class="fw-bold">
                            {{-- @foreach($books as $book)
                                <p>{{ $book->nom }}</p>
                            @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection