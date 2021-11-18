@extends('layout')
    @section('parallax')
        @include('second')
    @endsection
    @section('content')
    <title>{{ $title }}</title>
    <div class="main--all-container">
    <h1>{{ $title }}</h1>
    <hr>

    <!--card section-->
    
        <div class="row"  style="box-sizing: border-box;">
            <div class="category_list">
              
            </div>
            @foreach ($posts as $post)
                
            <div class="row g-0 bg-light position-relative mb-5">
                <div class="col-md-6 mb-md-0 p-md-4">
                    <div class="w-100"></div>
                  <img src="{{asset('img')}}/{{ $post->postimg }}" class="w-100" alt="{{ $post->title }}">
                </div>
                <div class="col-md-6 p-4 ps-md-0">
                  <h5 class="mt-0">{{ $post->title }}</h5>
                  <p>{{ $post->excerpt }}</p>
                  <a href="{{ url('/locales') }}/{{ $post->postlink }}" class="btn btn-primary stretched-link">Leer Más...</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">{{ $post->published_at->diffForHumans() }}</small>
                </div>
              </div>
            @endforeach
    
            {{-- @foreach ($posts as $post)
            <div class="col mb-5">
                <div class="card" id="list-item-4" style="width: 18rem;  height:520px;" category="juguetes">
                    <img src="{{asset('img')}}/{{ $post->postimg }}" class="card-img-top" alt="{{ $post->title }}" loading="lazy" width="286px" height="286px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="{{ url('/locales') }}/{{ $post->postlink }}" class="btn btn-primary">Leer Más...</a>
                    </div>
    
                    <div class="card-footer">
                        <small class="text-muted">{{ $post->published_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
            @endforeach --}}
        {{-- <div class="col mb-5">
            <div class="card" id="list-item-4" style="width: 18rem;  height:520px;" category="juguetes">
                <img src="{{ asset('img/bacon-bros-logo.jpg') }}" class="card-img-top" alt="Bacon bros logo" loading="lazy" width="286px" height="286px">
                <div class="card-body">
                    <h5 class="card-title">Bacon Bros</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, libero?</p>
                    <a href="{{ url('/locales/bacon-bros') }}" class="btn btn-primary stretched-link">Leer Más...</a>
                </div>
            </div>
        </div> --}}
    {{--     <div class="col mb-5">
            <div class="card" id="list-item-4" style="width: 18rem;  height:520px;" category="juguetes">
                <img src="{{ asset('img/didactoys-img.jpg') }}" class="card-img-top" alt="didactoys logo" loading="lazy" width="286px" height="286px">
                <div class="card-body">
                    <h5 class="card-title">Didactoys</h5>
                    <p class="card-text">didactoys desc</p>
                    <a href="{{ url('/locales/didactoys') }}" class="btn btn-primary stretched-link">Leer Más...</a>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card" id="list-item-4" style="width: 18rem;  height:520px;" category="juguetes">
                <img src="{{ asset('img/mauxi-creaciones.jpg') }}" class="card-img-top" alt="mauxi creaciones logo" loading="lazy" width="286px" height="286px">
                <div class="card-body">
                    <h5 class="card-title">Mauxi creaciones</h5>
                    <p class="card-text">mauxi creaciones desc</p>
                    <a href="{{ url('/locales/mauxi-creaciones') }}" class="btn btn-primary stretched-link">Leer Más...</a>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card" id="list-item-4" style="width: 18rem;  height:520px;" category="juguetes">
                <img src="" class="card-img-top" alt="water" loading="lazy" width="286px" height="286px">
                <div class="card-body">
                    <h5 class="card-title">water</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, libero?</p>
                    <a href="" class="btn btn-primary">Leer Más...</a>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card" id="list-item-4" style="width: 18rem;  height:520px;" category="juguetes">
                <img src="" class="card-img-top" alt="water" loading="lazy" width="286px" height="286px">
                <div class="card-body">
                    <h5 class="card-title">water</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, libero?</p>
                    <a href="" class="btn btn-primary">Leer Más...</a>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card" id="list-item-4" style="width: 18rem;  height:520px;" category="juguetes">
                <img src="" class="card-img-top" alt="water" loading="lazy" width="286px" height="286px">
                <div class="card-body">
                    <h5 class="card-title">water</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, libero?</p>
                    <a href="" class="btn btn-primary">Leer Más...</a>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card" id="list-item-4" style="width: 18rem;  height:520px;" category="juguetes">
                <img src="" class="card-img-top" alt="water" loading="lazy" width="286px" height="286px">
                <div class="card-body">
                    <h5 class="card-title">water</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, libero?</p>
                    <a href="" class="btn btn-primary">Leer Más...</a>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card" id="list-item-4" style="width: 18rem;  height:520px;" category="juguetes">
                <img src="" class="card-img-top" alt="water" loading="lazy" width="286px" height="286px">
                <div class="card-body">
                    <h5 class="card-title">water</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, libero?</p>
                    <a href="" class="btn btn-primary">Leer Más...</a>
                </div>
            </div>
        </div> --}}
    
    </div>
    </div>
    


    
    
    @endsection