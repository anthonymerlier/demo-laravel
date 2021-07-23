<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function allBooks()
    {
        // Demander à Laravel de récupérer tous les objets dans la table Books
        $books = Book::latest()->paginate(10);
        //dd($books);
        // Retourne note vue avec les books intégrés
        return view('books.books', compact('books'));
    }

    public function displayOne($id)
    {
        // Au sein du Model Book, vas me chercher celui qui ...
        $book = Book::find($id);
        $book->author = $book->author()->first();
        return view('books.book', compact('book'));
    }

    public function create()
    {
        $auteurs = Author::get();
        // dd($auteurs);
        return view('books.create', compact("auteurs"));
    }

    public function store(Request $request){

        $book = new Book();

        $book->nom = $request->title;
        $book->ISBN = $request->ISBN;
        $book->price = $request->price;
        $book->author_id = $request->auteur;

        $book->save();

        return 'Livre ajouté';
    }
}
