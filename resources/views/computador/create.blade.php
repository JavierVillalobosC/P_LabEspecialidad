@extends('layouts.plantillabase')

@section('contenido')
<h2>Crear Registros</h2>
<form action="/computadores" method="POST">
    @csrf
    <div class="mt-3">
        <label for="" class="form-label">Modelo</label>
        <input id="modelo" name="modelo" type="text" class="from-control" tabindex="1">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="from-control" tabindex="2">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Estatus</label>
        <input id="estatus" name="estatus" type="text" class="from-control" tabindex="3">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="from-control" tabindex="4">
    </div>
    <a href="/computadores" class="btn btn-secondary" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
</form>
@endsection