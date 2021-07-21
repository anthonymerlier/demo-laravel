<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    public function allAuthors(){
        $authors = Author::get();
        return view('authors.authors', compact('authors'));
    }

    public function displayOne($id)
    {
        $author = Author::find($id);
        // Récupère tous les livres associés par FK
        $author->livres = $author->books()->get();
        return view('authors.author', compact('author'));
    }

    public function create(){
        return view('authors.create');
    }

    public function store(Request $request){
        $auteur = new Author();

        $auteur->nom = $request->nom;
        $auteur->prenom = $request->prenom;

        $auteur->save();

        return "Auteur ajouté";

    }
}
