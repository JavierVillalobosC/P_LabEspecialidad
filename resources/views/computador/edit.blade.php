@extends('layouts.plantillabase');

@section('contenido')
<h2>Editar Registros</h2>

<form action="/computadores/{{$computador->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mt-3">
        <label for="" class="form-label">Modelo</label>
        <input id="modelo" name="modelo" type="text" class="from-control" value="{{$computador->modelo}}">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="from-control" value="{{$computador->descripcion}}">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Estatus</label>
        <input id="estatus" name="estatus" type="text" class="from-control" value="{{$computador->estatus}}">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="from-control" value="{{$computador->cantidad}}">
    </div>
    <a href="/computadores" class="btn btn-secondary" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
</form>
@endsection