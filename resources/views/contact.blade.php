@extends('layouts.app')

@section('content')
    <h1>Contact Page</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ex fuga harum nihil officia temporibus vero similique nulla, quaerat inventore necessitatibus optio provident adipisci maiores quisquam quod illo non. Ducimus doloribus accusantium incidunt, magnam inventore assumenda dolorum voluptatum eius eum.</p>
    <hr>
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="emailAddress" class="form-label">Adresse email</label>
            <input type="email" class="form-control" id="emailAddress" aria-describedby="emailHelp" value="test@example.com" name="email">
            <div id="emailHelp" class="form-text">Votre adresse ne sera jamais utilisée dans le cadre de prospection ou marketing.</div>
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Sujet</label>
            <input type="text" class="form-control" id="subject" value="test_example" name="subject">
          </div>
          <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea name="contenu" id="message" cols="30" rows="10" class="form-control">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia nobis ad alias.</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>


@endsection