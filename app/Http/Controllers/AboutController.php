<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function acerca_de()
    {
        if (request()->has('empty')) {
            $portadas = ['https://zcpublicidad.com/laravel/public/img/zcpublicidad-logo.png', ]; 
        } else {
            $portadas = ['https://zcpublicidad.com/laravel/public/img/zcpublicidad-logo.png',];  
        }
        $desc = 'Acerca de ZCpublicidad';
        $title='Acerca de ZCpublicidad';
        return view('acerca-de', compact('title', 'desc', 'portadas'));
    }
}
