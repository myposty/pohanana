<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacto()
    {
        if (request()->has('empty')) {
            $portadas = ['https://zcpublicidad.com/laravel/public/img/zcpublicidad-logo.png', ]; 
        } else {
            $portadas = ['https://zcpublicidad.com/laravel/public/img/zcpublicidad-logo.png',];  
        }
        $desc = 'Contacta con nosotros';
        $title='Contacta con nosotros';
        return view('contacto', compact('title','desc','portadas'));
    }
}
