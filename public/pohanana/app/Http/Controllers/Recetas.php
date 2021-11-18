<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Recetas extends Controller
{
    public function recetas()
    {
        return view('recetas');
    }
}
