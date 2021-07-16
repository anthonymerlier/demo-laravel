<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function allBooks()
    {
        // Demander à Laravel de récupérer tous les objets dans la table Books
        $books = Book::get();
        // dd($books);
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
}
