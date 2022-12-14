@extends('layouts.plantillabase');

@section('contenido')
<a href = "computadores/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Modelo</th>
            <th scope="col">Descripción</th>
            <th scope="col">Estatus</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($computadores as $computador)
        <tr>
            <td>{{$computador->id}}</td>
            <td>{{$computador->modelo}}</td>
            <td>{{$computador->descripcion}}</td>
            <td>{{$computador->estatusid}}</td>
            <td>{{$computador->cantidad}}</td>
            <td>
                <form action="{{ route ('computadores.destroy', $computador->id)}}" method="POST">
                <a href="/computadores/{{$computador->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="Submit" class="btn btn-danger">Borrar</button>
            </td>

        </tr>
        @endforeach
    </tbody>

</table>
@endsection