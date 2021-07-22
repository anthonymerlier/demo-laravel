<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        // FetchAll d'une requete SQL
       $books = Book::get();
        return view('welcome', compact('books') );
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactSend(Request $request){
        // ICI mon code
        $message = new Message();

        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->contenu = $request->contenu;

        $message->save();
        
        return redirect()->route('sendcontactmail');
    }

}
