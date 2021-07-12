<?php

namespace App\Http\Controllers;

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

}
