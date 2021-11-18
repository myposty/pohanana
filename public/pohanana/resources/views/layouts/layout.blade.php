

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta name="description" content="PohaÑana, japita la inea kp, porque la pasion nos une y el SEO debe de llegar a no se cuantos caracteres de
    porqueria para que  funcione la madre esa de su hermana en 4 en tanga de ilo dental casero hecho por rudolf que no tengo una media idea de quien carajos sea el muy imvesil de mierda besos a todos menos a maluma">
    <meta name="keywords" content="PohaÑana">
    <meta name="author" content="Brahian Riveros">
    <!--facebook meta tags-->
    <meta property="og:url"                content="https://myposty.github.io/pohanana/" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="PohaÑana" />
    <meta property="og:description"        content="PohaÑana, japita la inea kp, porque la pasion nos une y el SEO debe de llegar a no se cuantos caracteres de
    porqueria para que  funcione la madre esa de su hermana en 4 en tanga de ilo dental casero hecho por rudolf que no tengo una media idea de quien carajos sea el muy imvesil de mierda besos a todos menos a maluma" />
    <meta property="og:image"              content="{{asset('img/brand.webp')}}" />
    <!--twitter meta tags-->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@Pohanana" />
    <meta name="twitter:title" content="PohaÑana" />
    <meta name="twitter:description" content="PohaÑana, japita la inea kp" />
    <meta name="twitter:image" content="{{asset('img/brand.webp')}}" />

    <link rel="canonical" href="{{$currentURL = url()->current();}}">
    <link rel="shortcut icon" href="{{asset('img/brand.webp')}}" type="image/webp">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- <link rel="stylesheet" href="css-min/sticky.css"> -->
    <title>PohaÑana</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
    <!--header desktop-->
    <div class="header-desktop-container">
        <div class="header-desktop-content">
            <div class="brand-logo">
                <a href="{{url('/')}}" class="logo-img">
                    <img src="{{asset('img/brand.webp')}}" alt="logo img">
                </a>
            </div>
            <nav class="nav-bar">
                <div class="nav-bar-menu">
                    <a href="{{url('/')}}" class="nav-link">Inicio</a>
                    <a href="{{url('/acerca-de')}}" class="nav-link">Acerca de</a>
                    <a href="{{url('/recetas')}}" class="nav-link">Recetas</a>
                    <a href="{{url('/yuyos')}}" class="nav-link">Yuyos</a>
                    <a href="{{url('/contacto')}}" class="nav-link">Contacto</a>
                </div>
            </nav>
        </div>
    </div>
    <!--header mobile-->
</header>
    
@yield('contenido')




    <footer>
        <div class="footer-container">
            <div class="footer-copy"><em> &copy PohaÑana 2021 | Todos los derechos reservados</em></div>
            <div class="footer-content">
                <div class="foot1">
                    <div class="about-us">
                        <div class="about-us-content">
                            <div class="footer-img"><img src="{{asset('img/brand.webp')}}" alt="footer img"></div>
                            <h1>Acerca de nosotros</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex, et!</p>
                        </div>
                    </div>
                </div>
                <div class="foot2">
                    <div class="media-links">
                        <h1 >Redes sociales</h1>
                        <div class="media-links-container">
                            <a href="{{url('/')}}" class="fb-link" title="Facebook"><i class="fab fa-facebook"></i></a>
                            <a href="{{url('/')}}" class="ig-link" title="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="{{url('/')}}" class="yt-link" title="Youtube"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="foot3">
                    <div class="enlaces-utiles">
                        <h1>Enlaces utiles</h1>
                        <div class="link-container">
                        <a href="{{url('/')}}">title</a>
                        <a href="{{url('/')}}">title</a>
                        <a href="{{url('/')}}">title</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="footer-politica">
                <a href="#">Politica de Privacidad</a>
                <a href="#">Politica de Cookie</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="{{asset('js/jquery-2.0.2.js')}}"></script> 
    <script src="{{url('/stellar/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/parallax.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
