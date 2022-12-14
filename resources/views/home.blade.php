@extends('app')
@section('content')
@auth
<p style = "position:relative; left:110px; top:150px;">Bienvenid@  <b>{{ Auth::user()->name }}</b></p>

<a style = "position:relative; left:18px; top:200px;" class="btn btn-primary" href="{{ route('password') }}">
Cambiar contraseña
</a>
<a style = "position:relative; left:22px; top:200px;" class="btn btn-danger" href="{{ route('logout') }}">
Cerrar sesión
</a>


@endauth
@guest
<a style = "position:relative; left:98px; top:200px;" class="btn btn-primary" href="{{ route('login') }}">
    Entrar
</a>
<a style = "position:relative; left:100px; top:200px;"class="btn btn-info" href="{{ route('register') }}">
    Registrarse
</a>
@endguest
@endsection