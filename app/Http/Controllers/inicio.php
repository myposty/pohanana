<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicio extends Controller
{
    public function inicio()
    {
        if (request()->has('empty')) {
            $portadas = [];
        } else {
            $portadas = ['https://zcpublicidad.com/laravel/public/img/zcpublicidad-logo.png', ];   
        }

        $desc = 'Locales disponibles kp';
        $title = "<span>ZCpublicidad</span> tu opcion en tu emprendimiento";

        return view('inicio', compact('title', 'desc', 'portadas'));
    }
}
