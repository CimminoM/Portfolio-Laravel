<?php

namespace App\Http\Controllers;

use App\Http\Requests\MyFormRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class formController extends Controller
{
    public function homepage() 
    {
        return view('cimmino.home');
    }
    public function thank() 
    {
        return view("cimmino.thanks");
    }

    public function send(MyFormRequest $request) 
    {   
        
        $content = [
            'name'=> $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('michelecimminoportfolio@gmail.com')->send(new ContactMail($content));
        // Invio dati
        return redirect()->route('thank');
    }
}
