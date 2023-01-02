@extends('plantilla')
@section('contenido')
<div class="row mt-3">
    <div class="col-md-4 offset-md-4">
        <div class="d-grid mx-auto">
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalProductos">
                <i class="fa-solid fa-circle-plus"></i>  Añadir
            </button>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12 col-lg-8 offset-0 offset-lg-2">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead><tr><th>#</th><th>Nombre</th><th>Alias</th><th>Correo</th><th>Nacimiento</th><th>Domicilio</th><th>Telefono</th><th>Ingreso</th><th>Salario</th><th>Area</th><th>Perfil</th><th>EDITAR</th><th>ELIMINAR</th></tr></thead>
                <tbody class="table-group-divider">
                    @php $i=1; @endphp
                    @foreach($empleados as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->nombre }}</td>
                            <td>{{ $row->alias }}</td>
                            <td>{{ $row->correo }}</td>
                            <td>{{ $row->nacimiento }}</td>
                            <td>{{ $row->domicilio }}</td>
                            <td>{{ $row->telefono }}</td>
                            <td>{{ $row->ingreso }}</td>
                            <td>{{ $row->salario }}</td>
                            <td>{{ $row->codigo }}</td>
                            <td>{{ $row->nombrep }}</td>
                            <td>
                                <a href="{{ url('empleados', [$row->id]) }}" class="btn btn-warning"><i class="fa-solid fa-edit"></i></a>
                            </td>
                            <td>
                                <form method="POST" action="{{ url('empleados',[$row]) }}">
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
<div class="modal fade" id="modalProductos" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <label class="h5" id="titulo_modal">Añadir empleado</label>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmEmpleados" method="POST" action="{{url("empleados")}}">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                        <input type="text" name="nombre" class="form-control" maxlength="50" placeholder="Nombre" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-qrcode"></i></span>
                        <input type="text" name="alias" class="form-control" maxlength="50" placeholder="Alias" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-qrcode"></i></span>
                        <input type="email" name="correo" class="form-control" maxlength="100" placeholder="Correo" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                        <input type="date" name="nacimiento" class="form-control" maxlength="50" placeholder="Nacimiento" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-qrcode"></i></span>
                        <input type="text" name="domicilio" class="form-control" maxlength="150" placeholder="Domicilio" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-qrcode"></i></span>
                        <input type="text" name="telefono" class="form-control" maxlength="10" placeholder="Telefono" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                        <input type="date" name="ingreso" class="form-control" maxlength="50" placeholder="Ingreso" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-qrcode"></i></span>
                        <input type="text" name="salario" class="form-control" maxlength="11" placeholder="Salario" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-qrcode"></i></span>
                        <input type="password" name="password" class="form-control" maxlength="30" placeholder="Contraseña" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
                        <select name="id_area" class="form-select" required>
                            <option value="">Area</option>
                            @foreach($areas as $row)
                            <option value="{{ $row->id}}">{{ $row->codigo}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
                        <select name="id_perfil" class="form-select" required>
                            <option value="">Perfil</option>
                            @foreach($perfils as $row)
                            <option value="{{ $row->id}}">{{ $row->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-grid col-6 mx-auto">
                        <button class="btn btn-success" ><i class="fa-solid fa-floppy-disk"></i>  Guardar</button>
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