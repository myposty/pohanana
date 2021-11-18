@extends('layout')
    @section('content')
    <title>{{ $title }}</title>
    @empty($nickname)
    <p>Bienvenido {{ $name }}</p>
        @else
        <p>Bienvenido {{ $name }}, tu apodo es {{ $nickname }}</p>
    @endempty
    
    @endsection