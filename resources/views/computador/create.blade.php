<!-- @extends('layouts.plantillabase')

@section('contenido')
<h2>Crear Registros</h2>
<form action="{{ route('create.action') }}"  method="POST">
    @csrf
    <div class="mt-3">
        <label for="" class="form-label">ID</label>
        <input id="ID_Portatilesp" name="ID_Portatilesp" type="number" class="from-control" tabindex="1">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Tag</label>
        <input id="Tag" name="Tag" type="text" class="from-control" tabindex="2">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Modelo</label>
        <input id="Modelo" name="Modelo" type="text" class="from-control" tabindex="3">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Inventario</label>
        <input id="Inventario" name="Inventario" type="number" class="from-control" tabindex="4">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Especificaciones</label>
        <input id="Especificaciones" name="Especificaciones" type="text" class="from-control" tabindex="4">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Carrera</label>
        <input id="Carrera" name="Carrera" type="text" class="from-control" tabindex="4">
    </div>
    <div class="mt-3">
        <label for="" class="form-label">Estado</label>
        <input id="Estado" name="Estado" type="text" class="from-control" tabindex="4">
    </div>
    <a href="/computador" class="btn btn-secondary" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
</form>
@endsection -->