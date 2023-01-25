@extends('/layouts/plantilla')
@section('contenido')
<div class="row mt-3">
    <div class="col-md-4 offset-md-4">
        <div class="d-grid mx-auto">
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalEstados">
                <i class="fa-solid fa-circle-plus"></i> Añadir
            </button>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12 col-lg-8 offset-0 offset-lg-2">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>fecha</th>
                        <th>hora</th>
                        <th>fecha de devolucion</th>
                        <th>Encargado</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @php $i=1; @endphp
                    @foreach($prestamos as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->ID_Prestamo}}</td>
                        <td>{{ $row->fecha }}</td>
                        <td>{{ $row->hora }}</td>
                        <td>{{ $row->fecha_devolucion }}</td>
                        <td>{{ $row->user_id }}</td>
                        <a href="{{ url('prestamo',[$row]) }}" class="btn btn-warning"><i
                                class="fa-solid fa-edit"></i></a>
                        </td>
                        <td>
                            <form method="POST" action="{{ url('prestamo', [$row]) }}">
                                @method("delete")
                                @csrf
                                <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="modalEstados" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <label class="h5" id="titulo_modal">Añadir Prestamo</label>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <form id="frmPrestamo" method="POST" action="{{url("prestamo")}}">
                    @csrf
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-laptop"></i></span>
                        <input type="date" name="prestamo" class="form-control" maxlength="50" placeholder="Fecha"
                            required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-laptop"></i></span>
                        <input type="time" name="estado" class="form-control" maxlength="50" placeholder="Hora"
                            required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-laptop"></i></span>
                        <input type="date" name="estado" class="form-control" maxlength="50" placeholder="Fecha de devolución"
                            required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-laptop"></i></span>
                        <input type="integer" name="estado" class="form-control" maxlength="50" placeholder="Encargado"
                            required>
                    </div>
                    <div class="d-grid col-6 mx-auto">
                        <button class="btn btn-success"><i class="fa-solid fa-floppy-disk>"></i> Guardar </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnCerrar" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endsection