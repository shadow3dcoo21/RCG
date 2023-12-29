<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    

    <!-- Scripts -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    @vite(['resources/css/style.css'])
    <script>
        window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("nav_all").classList.add("scrolled");
    } else {
        document.getElementById("nav_all").classList.remove("scrolled");
    }
}
const menuItems = document.querySelectorAll('present');

menuItems.forEach(item => {
  item.addEventListener('click', function() {
    // Elimina la clase 'active' de todos los elementos del menú
    menuItems.forEach(item => {
      item.classList.remove('active');
    });

    // Agrega la clase 'active' al elemento seleccionado
    this.classList.add('active');
  });
});
    </script>
</head>
<body>

<!-- prueba Links -->

    <div class="">
        <nav class="navbar-expand-md nav_all " id="nav_all">
            <div class="container_int">
                <div class="logo_nav">
                    <div class="logo_nav_int">
                        
                        <img src="{{ asset('imagenes/Logotipo Final-12.png') }}" alt="Texto alternativo">
                    </div>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                           
                            
                    </ul>
                    <div class="nav_int">
                        <div class="_fixed">
                            
                            
                            <div class="present" id="inicio"><a class="nav-text" href="{{ route('welcome') }}">Inicio</a></div>
                            <div class="present" id="nosotros"><a class="nav-text" href="{{ route('nosotros') }}">Nosotros</a></div>
                            <div class="present" id="alquiler"><a class="nav-text" href="{{ route('alquiler') }}">Alquiler</a></div>
                            <div class="present" id="agregados"><a class="nav-text" href="{{ route('agregados') }}">Agregados</a></div>
                            <div class="present" id="proyectos"><a class="nav-text"href="{{ route('nosotros') }}">Proyectos</a></div>
                            <div class="present" id="trabaja"><a class="nav-text" href="{{ route('nosotros') }}">Trabaja con nosotros</a></div>
                            <div class="present" id="contacto"><a class="nav-text" href="{{ route('contacto') }}">Contacto</a></div>
                        
                            
                        </div>
                    </div>
                    <!-- Right Side Of Navbar -->
                    <div class="login_nav">
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </button>
                                    
                                
                            @endif

                            @if (Route::has('register'))
                            <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </button>
                                
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="btn color_boton_nombre  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    </div>
                </div>
            </div>
        </nav>
        
        
    </div>


					
    <main class="">
            @yield('content')
        </main>
</body>
</html>
