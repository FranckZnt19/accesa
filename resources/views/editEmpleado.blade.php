@extends('plantilla')
@section('contenido')
<div class="row mt-3">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header bg-dark text-white">Editar area</div>
            <div class="card-body">
                <form id="frmEmpleados" method="POST" action="{{url("empleados",[$empleado])}}">
                    @method('PUT')
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                        <input type="text" name="nombre" value="{{ $empleado->nombre}}" class="form-control" maxlength="50" placeholder="Nombre" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-qrcode"></i></span>
                        <input type="text" name="alias" value="{{ $empleado->alias}}" class="form-control" maxlength="50" placeholder="Alias" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-qrcode"></i></span>
                        <input type="email" name="correo" value="{{ $empleado->correo}}" class="form-control" maxlength="100" placeholder="Correo" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                        <input type="date" name="nacimiento" value="{{ $empleado->nacimiento}}" class="form-control" maxlength="50" placeholder="Nacimiento" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-qrcode"></i></span>
                        <input type="text" name="domicilio" value="{{ $empleado->domicilio}}" class="form-control" maxlength="150" placeholder="Domicilio" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-qrcode"></i></span>
                        <input type="text" name="telefono" value="{{ $empleado->telefono}}" class="form-control" maxlength="10" placeholder="Telefono" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                        <input type="date" name="ingreso" value="{{ $empleado->ingreso}}" class="form-control" maxlength="50" placeholder="Ingreso" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-qrcode"></i></span>
                        <input type="text" name="salario" value="{{ $empleado->salario}}" class="form-control" maxlength="11" placeholder="Salario" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
                        <select name="id_area" class="form-select" required>
                            @foreach($areas as $row)
                                @if ($row->id == $empleado->id_area)
                                    <option selected value="{{ $row->id}}">{{ $row->codigo}}</option>
                                @else
                                    <option value="{{ $row->id}}">{{ $row->codigo}}</option>
                                @endif
                            
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
                        <select name="id_perfil" class="form-select" required>
                            @foreach($perfils as $row)
                                @if ($row->id == $empleado->id_perfil)
                                <option selected value="{{ $row->id}}">{{ $row->nombre}}</option>
                                @else
                                    <option value="{{ $row->id}}">{{ $row->nombre}}</option>
                                @endif

                            @endforeach
                        </select>
                    </div>
                    <div class="d-grid col-6 mx-auto">
                        <button class="btn btn-success" ><i class="fa-solid fa-floppy-disk"></i>  Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection