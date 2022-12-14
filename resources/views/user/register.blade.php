@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form align="center" action="{{ route('register.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nombre <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" />
            </div>
            <div class="mb-3">
                <label>Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email"  />
            </div>
            <div class="mb-3">
                <label>Contraseña<span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <label>Confirmación de contraseña<span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password_confirm" />
            </div>
            <div class="mb-3">
                <button class="btn btn-outline-primary">Registrar</button>
                <a class="btn btn-outline-danger" href="{{ route('home') }}">Atras</a>
            </div>
        </form>
    </div>
</div>
@endsection