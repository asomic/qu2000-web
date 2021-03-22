<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Titulo de la pagina - QU2000</title> --}}
    @yield('page-title')
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/hamburgers.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}?v=2">
</head>
<body>
    <main class="site-wrapper">

        <div class="alerts-wrapper">
            <div class="alert add">
                <img src="{{asset('/images/cart-icon-mini.png')}}">
                <p>Producto agregado</p>
            </div>
        </div>

        <!-- Header -->
        <header>
            <div class="header-inner pd-lr">
                <a href="/" class="logo-header">
                    <img src="{{ asset('/images/logo.png') }}" alt="Ir al Home">
                </a>
                <nav class="header-menu">
                    <ul>
                        <a href="/">Inicio</a>
                        <a href="{{ asset('/catalogo') }}">Catálogo</a>
                        <a href="{{ asset('/nosotros') }}">Nosotros</a>
                        <a href="{{ asset('/mayoristas') }}">Mayoristas</a>
                        {{-- <a href="{{ asset('/sucursales') }}">Sucursales</a> --}}
                        <a href="{{ asset('/contacto') }}">Contacto</a>
                    </ul>
                </nav>
                <div class="action-menu">
                    <a href="{{ asset('/cotizador') }}" class="cart-menu @if(Session::has('itemList')) @if(count(Session::get('itemList')) > 0 )  has-items @endif @endif">
                        <img src="{{ asset('/images/cart-process.png') }}" alt="Ir al cotizador">
                    </a>
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </header>

        @yield('all')


        <!-- Footer -->
        <footer class="site-footer">
            <div class="data-wrapper pd-lr">
                <div class="data">
                    <div class="logo">
                        <img src="{{asset('/images/logo.png')}}" alt="QU2000">
                    </div>
                    <div class="rrss">
                        <h6>Redes Sociales</h6>
                        <a href="/">
                            <img src="{{asset('')}}/images/icon-facebook.png" alt="Facebook">
                            Facebook
                        </a>
                        <a href="/">
                            <img src="{{asset('/images/icon-instagram.png')}}" alt="Facebook">
                            Instagram
                        </a>
                    </div>
                    <div class="numbers">
                        <h6>Números de Atención</h6>
                        <a href="tel:+56939216077">+56 9 392 16 077</a>
                        <a href="tel:+56979821243">+56 9 798 21 243</a>
                    </div>
                    <div class="fabrica">
                        <h6>Fábrica</h6>
                        <p>
                            Ruta J-60, Km 13.2
                            <br />
                            Sector Quilpoco, Rauco
                            <br />
                            Curicó, Región del Maule
                        </p>
                    </div>
                </div>
            </div>
            <div class="credits ">
                <img src="{{asset('/images/asomic.png')}}" alt="asomic">
                <p>
                    Hecho en Curicó, Chile por <a href="https://asomic.com">asomic</a>
                </p>
            </div>
        </footer>

    </main>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('/js/app.js')}}"></script>
    @yield('js')
</body>
</html>

