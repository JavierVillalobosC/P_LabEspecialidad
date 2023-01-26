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
                        <th>fecha de solicitud</th>
                        <th>fecha de recepción</th>
                        <th>hora de recepción</th>
                        <th>fecha de devolución</th>
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
                        <td>{{ $row->fecha_solicitud }}</td>
                        <td>{{ $row->fecha_recpcion }}</td>
                        <td>{{ $row->hora_recepcion }}</td>
                        <td>{{ $row->fecha_devolucion }}</td>
                        @foreach($users as $row)
                        <td value="{{ $row->user_id }}">{{ $row->name }}</td>
                        @endforeach
                        <td>
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
                        <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                        <input type="date" name="fecha" class="form-control" maxlength="50"
                            placeholder="Fecha de solicitud" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                        <input type="date" name="fecha" class="form-control" maxlength="50"
                            placeholder="Fecha de recepción" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
                        <input type="time" name="hora" class="form-control" maxlength="50"
                            placeholder="Hora de recepción" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                        <input type="datetime-local" name="fecha" class="form-control" maxlength="50"
                            placeholder="Fecha de devolución" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-person"></i></span>
                        <input type="integer" name="persona" class="form-control" maxlength="50"
                            placeholder="Encargado" required>
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