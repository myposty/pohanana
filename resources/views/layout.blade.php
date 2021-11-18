 
<!doctype html>
<html lang="es" class="h-100" oncontextmenu="return false;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ZCpublicidad, dió por inicio un dia cuando el joven Brahian ocurrentemente quiso dar inicio a una plataforma web, que se basa en ayudar a las personas que cuenten con negocios pequeños, a realizarles una publicidad, con la intencion de llamar la atencion de los internautas y asi puedan vender sus productos">
    <meta name="author" content="Brahian Riveros Freelancer, hecha con <3, pagina diseñada y adecuada a tus necesidades, desde Paraguay al mundo">
    <meta name="generator" content="Brahian Riveros Freelancer">
    
    <!--DATOS PERTURBADORES XDXD-->
    <meta property="og:title" content="{{ $title }}"/>

    <meta property="og:url" content="{{ $currentURL = url()->current() }}"/>

    <meta property="og:image" content="@empty($portadas)
        @else
            @foreach ($portadas as $portada)
            {{ $portada }}
            @endforeach
    @endempty"/>

    <meta property="og:description" content="{{ $desc }}"/>
    
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
 <!--styles-->
    {{-- <link rel="stylesheet" href="{{asset('css/main.css')}}"> --}}

    <link rel="preload" href="{{asset('css/main.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
  </noscript>
<!--fancybox-->
    <link rel="stylesheet" href="{{asset('css/fancybox.css')}}">
 
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="{{ asset('img/zc-logo-180x180.svg') }}" sizes="180x180">
<link rel="icon" href="{{ asset('img/zc-logo-32x32.svg') }}" sizes="32x32" type="image/png">
<link rel="icon" href="{{ asset('img/zc-logo-16x16.svg') }}" sizes="16x16" type="image/png">
<link rel="mask-icon" href="{{ asset('img/zc-logo-svg.svg') }}" color="#7952b3">
<link rel="icon" href="{{ asset('img/zc-logo-svg.svg') }}">
<link rel="manifest" href="{{ url('manifest.json') }}" />
<meta name="theme-color" content="#46a2fd">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <style>
        /* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */

main > .container {
  padding: 60px 15px 0;
}
    </style>
  </head>
  <body class="d-flex flex-column h-100" id="page-top" data-spy="scroll" data-target=".fixed-top">
    
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light bg-gradient">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('img/zc-logo-svg.svg') }}" alt="zc" width="30" height="24">        
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        

        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}"  aria-current="page" href="{{ url('/') }}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteNamed('locales') ? 'active' : '' }}" aria-current="page" href="{{ url('/locales') }}">Locales</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/acerca-de') ? 'active' : '' }}" aria-current="page" href="{{ url('/acerca-de') }}">Acerca de</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/contacto') ? 'active' : '' }}" aria-current="page" href="{{ url('/contacto') }}">Contacto</a>
          </li>         
        </ul>
        
        <div class="d-flex">
          
          @if (Route::has('login'))
          <ul class="navbar-nav">
            <li class="nav-item">
              @auth
                      <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                  @else
            </li>

            <li class="nav-item">
              <a href="{{ route('login') }}" class="nav-link">Iniciar sesión</a>
            </li>

            <li class="nav-item">
              @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="nav-link">Registrarse</a>
                      @endif
            </li>
          </ul>
          @endauth
          @endif
        </div>
        <!-- 
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </nav>
</header>
@yield('first')
<!-- Begin page content -->
<main class="flex-shrink-0">
  @yield('parallax')
<!------------------------------------------------------------------------------------------->
@yield('content')
<!------------------------------------------------------------------------------------------->
</main>
{{-- <div class="main-scroll-top">
  <a class="back-to-top page-scroll" href="body">
    <i class="fas fa-angle-up"></i>
</a>
</div> --}}



<footer class="footer mt-auto py-3 bg-light">
  <div class="container text-center">
    <h3>&copy ZCpublicidad 2021 | Todos los derechos reservados </h3>
    <!-- <div class="redes">
      <a href="#" title="FaceBook"><i class="fab fa-facebook"></i></a>
      <a href="#" title="Insragram"><i class="fab fa-instagram"></i></a>
      <a href="#" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
    </div> -->
    <div class="enlaces-utiles text-start">
      <h3>enlaces utiles</h3>
      <ul>
        <li><a href="">insert title</a></li>
        <li><a href="">insert title</a></li>
        <li><a href="">insert title</a></li>
        <li><a href="">insert title</a></li>
      </ul>
    </div>
    <div class="redes-2">
      <h1>Redes sociales</h1>
        <ul>
          <li><a href="https://fb.com/zcpublipy" target="_blank" class="fb" title="Página de FaceBook"><i class="fab fa-facebook" ></i></a></li>
          <li><a href="https://instagram.com/zcpubli" class="ins" target="_blank" title="Página de Instagram"><i class="fab fa-instagram"></i></a></li>
          <li><a href="https://chat.whatsapp.com/GMWwYx8cQnT60WxovXK4Ru" class="wha"  title="Unirse al grupo de WhatsApp"><i class="fab fa-whatsapp"></i></a></li>
        </ul>
      </div>
  </div>
</footer>



<script src="http://localhost/stellar/jquery-2.0.2.min.js"></script>
<script src="http://localhost/stellar/parallax.js"></script>
<script src="http://localhost/stellar/jquery.stellar.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- 
<script src="https://zcpublicidad.com/mantenimiento/Assets/stellar/parallax.js?20210627"></script>

<script src="https://zcpublicidad.com/mantenimiento/Assets/stellar/jquery.stellar.min.js?20210627"></script> --}}




<script src="{{asset('js/fancybox.umd.js')}}"></script>
<script>//<![CDATA[
  function getlink() {
  var aux = document.createElement("input");
  aux.setAttribute("value", window.location.href.split("?")[0].split("#")[0]);
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);
  Swal.fire(
  'URL copiada al portapapeles\n\n',
  window.location.href.split("?")[0].split("#")[0],
  'success'
)
  /* alert("URL copiada al portapapeles\n\n" + window.location.href.split("?")[0].split("#")[0]); */
  }
  //]]></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>
