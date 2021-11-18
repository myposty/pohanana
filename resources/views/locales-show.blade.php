
@extends('layout')
    
    @section('content')
    <title>{{ $title }}</title>

    <div class="main--all-container">
        
    @empty($portadas)
    <p>Este local no tiene portada</p>
        @else
        <div class="img-portada">
            @foreach ($portadas as $portada)
            <img src="{{ $portada }}" alt="Portada del local">    
            @endforeach
            
        </div>    
    @endempty
    
    <h1>{{ $title }}</h1>
    <hr>
    <p class="desc-locales">{{ $desc }}</p>

    
    <div class="share--section">
        <h3>compartir</h3>
        <ul>
          <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ $currentURL = url()->current() }}&t={{ $title }}','ventanacompartir', 'toolbar=0, status=0, width=650, height=450" class="fb-2" title="Compartir en facebook" target="_blank"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#" class="messenger" title="Compartir en messenger" target="_blank"><i class="fab fa-facebook-messenger"></i></a></li>
          <li><a href="https://twitter.com/intent/tweet?text={{ $title }}&url={{ $currentURL = url()->current() }}&hashtags={{ $title }}" class="gplus" title="Compartir en google+" target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a href="https://api.whatsapp.com/send?phone=&text={{ $title }} {{ $currentURL = url()->current() }}" class="wha-2" title="Compartir en whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
          <li><a href="javascript:getlink();" class="copy" title="Copiar URL "><i class="fas fa-copy"></i></a></li>
        </ul>
    </div>
    <br>

    @empty($products)
        <p>No hay productos en este local ☹</p>
        @else
        <div class="productos-img">
            @foreach ($products as $product)
            <a data-fancybox data-type="image" href="{{ $product }}">
            <img src="{{ $product }}" alt="Imagen del producto" class="img-producto">    
            </a>
            @endforeach
        </div>
    @endempty
    <div class="contact-with-local">
        <h3>Contacta con nosotros</h3>
        <ul>
            <li><a href="">enlace al contact</a></li>
            <li><a href="">enlace al contact</a></li>
            <li><a href="">enlace al contact</a></li>
        </ul>
    </div>
    <div class="map-of-local">
        <h3>Nuestra Ubicacion</h3>
        @empty($locations)
        <h5>Este local no tiene ubicacion</h5>
        @else
        <div>
                
            @foreach ($locations as $location)
            <div>{!! $location !!}</div>
            @endforeach
        </div>
        @endempty
    </div>
    </div>
    
    
    
    
    @endsection