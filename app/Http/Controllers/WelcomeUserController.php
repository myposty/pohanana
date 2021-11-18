<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index($name, $nickname = null)
    {
            $name = ucfirst($name);
            $title = 'Saludos';

            return view('saludo', compact('title','name','nickname'));
        /* if ($nickname) {
            return "Bienvenido {$name}, tu apodo es {$nickname}";
        } else {
            
            return "Bienvenido {$name}";
        } */
    }
}
