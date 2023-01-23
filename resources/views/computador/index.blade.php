<!-- @extends('layouts.plantillabase');

@section('contenido')
<a href = "computadores/create" class="btn btn-primary">CREAR</a>
<a class="btn btn-danger" href="{{ route('home') }}">Atras</a>
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tag</th>
            <th scope="col">Modelo</th>
            <th scope="col">Inventario</th>
            <th scope="col">Especificaciones</th>
            <th scope="col">Carrera</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($computadores as $computador)
        <tr>
            <td>{{$computador->ID_Portatilesp}} </td>
            <td>{{$computador->Tag}}</td>
            <td>{{$computador->Modelo}}</td>
            <td>{{$computador->Inventario}}</td>
            <td>{{$computador->Especificaciones}}</td>
            <td>{{$computador->Carrera}}</td>
            <td>{{$computador->Estado}}</td>
            <td>
                <a class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Borrar</button>
            </td>
            <td><a href="computadores/{{$computador->id}}/edit/" class="btn btn-secondary" tabindex="6">editar</a></td>

        </tr>
        @endforeach
    </tbody>

</table>
@endsection -->