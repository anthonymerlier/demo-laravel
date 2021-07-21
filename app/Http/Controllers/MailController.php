<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailSended;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contactMailSend()
    {

        $user = [ "email" => "user@example.com", "name" => "John Doe"];

        Mail::to($user['email'])->send(new ContactMailSended($user));

        return redirect()->route('contactpage');
    }
}
