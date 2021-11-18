<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function login()
    {
        return view('login-admin');
    }

    public function dashboard()
    {
        $users = User::latest('created_at')->get();
        
        return view('admin-panel', compact('users'));
    }
    public function registrar()
    {
        return view('admin-register');
    }
    public function editar()
    {
        
        
        return view('editar');
    }
}
