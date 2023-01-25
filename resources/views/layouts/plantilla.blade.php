<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Laravel</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home">Laboratorio Especilidad</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @guest
                    @if (Route::has('login'))

                    @endif
                    @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/computadores">Computadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/estados">Estados</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/prestamo">Prestamos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/solicitud">Solicitudes</a>
                    </li>
                    <li class="nav-item dropdown">
                    @endguest

                </ul>
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('password') }}">
                                {{ __('cambiar contraseña') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                <form id="password-form" action="{{ route('password') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        
        @yield('contenido')
        
    </div>
</body>
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</html>