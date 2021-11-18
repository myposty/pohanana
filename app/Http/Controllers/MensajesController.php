<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class MensajesController extends Controller
{
    public function store(Request $request)
    {
      $mensaje =  request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:10'
        ]);

        //enviar el gmail

        Mail::to('brahianriveros14@gmail.com')->queue(new MensajeRecibido($mensaje));
        return view('mensaje-enviado');
    }
}
