@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col">
                <h1>Welcome to my Application</h1>
    <p class="text-danger">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ex fuga harum nihil officia temporibus vero similique nulla, quaerat inventore necessitatibus optio provident adipisci maiores quisquam quod illo non. Ducimus doloribus accusantium incidunt, magnam inventore assumenda dolorum voluptatum eius eum.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit eius deleniti commodi rerum minima tempora iusto ipsam, quisquam animi assumenda?</p>
            </div>
            <div class="fw-bold">
                @foreach($data as $item => $value)
                    <p>{{ $item }} : {{ $value }}</p>
                @endforeach
            </div>
        </div>
@endsection