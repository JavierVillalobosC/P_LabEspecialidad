@extends('/layouts/plantilla')
@section('contenido')
    <div class="row mt-3">
        <div class="col-md-4 offset-md-4">
            <div class="d-grid mx-auto">
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalSolicitud">
                    <i class="fa-solid fa-circle-plus"></i> Solicitar
                </button>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 col-lg-8 offset-0 offset-lg-2">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead><tr><th>#</th><th>ID</th><th>Equipo</th><th>Solicitante</th><th>EDITAR</th> <th>ELIMINAR</th></tr></thead>
                    <tbody class="table-group-divider">
                        @php $i=1; @endphp
                        @foreach($solicitud as $row)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $row->ID_solicitud }}</td>
                            <td>{{ $row->ID_Portatilesp }}</td>
                            <td>{{ $row->user_id }}</td>
                            <td>
                                <a href="{{ url('solicitud',[$row]) }}" class="btn btn-warning"><i class="fa-solid fa-edit"></i></a>
                            </td>
                            <td>
                                <form method="POST" action="{{ url('solicitud', [$row]) }}">
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
    <div class="modal fade" id="modalSolicitud" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="h5" id="titulo_modal">Añadir Solicitud</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    <form id="frmSolicitud" method="POST" action="{{url("solicitud")}}">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-laptop"></i></span>
                            <input type="number" name="ID_solicitud" class="form-control" maxlength="50" placeholder="ID" required>
                        </div>
                        <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-laptop"></i></span>
                        <select name=id_solicitud class="form-select" required>
                            <option value="">Equipo</option>
                            @foreach($computador as $row)
                            <option value="{{ $row->ID_Portatilesp}}">{{$row->Modelo}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-laptop"></i></span>
                            <input type="number" name="user_id" class="form-control" maxlength="50" placeholder="id solicitante" required>
                        </div>
                        <div class="d-grid col-6 mx-auto">
                            <button class="btn btn-success" ><i class="fa-solid fa-floppy-disk>"></i> Guardar</button>
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