<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        // FetchAll d'une requete SQL
        $data = [
            "first" => "Ma première phrase de l'array",
            "second" => "Ma seconde phrase de mon array"
        ];
        return view('welcome', compact('data') );
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
        
        return redirect()->route('homepage');
    }

}
