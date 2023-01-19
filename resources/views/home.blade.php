@extends('layouts.app')

@section('content')
@auth
<div class="login-box">
    <div class="login-logo">



    </div>

    <!-- /.login-logo -->


    <p style="position:relative; left:650px; top:150px;">Bienvenid@ <b>{{ Auth::user()->name }}</b></p>


    <div class="Container">
        <div class="row gy-3 ">
            <div >
                <a style="position:relative; " class="btn btn-primary" href="{{ route('computadores') }}">
                    Ver Computadores
                </a>
            </div>
            <div >
                <a style="position:relative; " class="btn btn-primary" href="{{ route('register_user') }}">
                    Registrar Usurario
                </a>
            </div>
            <div>
                    <a style="position:relative; " class="btn btn-primary">
                        Solicitudes de
                        Prestamos
                    </a>
            </div>
            

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
    </script>




    @endauth
    @guest
    <div class="login-box">
        <div class="login-logo">
            <a><b>HOME</b> </a>


        </div>

        <!-- /.login-logo -->
        <div class="Home-box-body">
            <div id="" class="">

                <img class="img-fluid mx-auto d-block rounded" src="img/ubb_logo_new.png" />
            </div>
            <a style="position:relative; left:140px; top:100px;" class="btn btn-primary" href="{{ route('login') }}">
                Entrar
            </a>





        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
    </script>

    @endguest
    @endsection