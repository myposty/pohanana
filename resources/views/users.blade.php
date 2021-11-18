@extends('layout')
    @section('content')
    <title>{{ $title }}</title>
    <h1>{{ $title }}</h1>
    <hr>
    @empty($users)
        <p>No hay usuarios registrados</p>
        @else
        <ul>
            @foreach ($users as $user)
            <li>{{ $user }}</li>    
            @endforeach
            
        </ul>    
    @endempty
    @endsection