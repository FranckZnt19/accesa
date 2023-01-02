@extends('plantilla')
@section('contenido')
<div class="row mt-3">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header bg-dark text-white">Editar area</div>
            <div class="card-body">
                <form id="frmAreas" method="POST" action="{{url("areas",[$area])}}">
                    @method('PUT')
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-pencil"></i></span>
                        <input type="text" name="gerente" value="{{ $area->gerente}}" class="form-control" maxlength="50" placeholder="Gerente" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-qrcode"></i></span>
                        <input type="text" name="codigo" value="{{ $area->codigo}}" class="form-control" maxlength="10" placeholder="Codigo" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-qrcode"></i></span>
                        <input type="text" name="ext" value="{{ $area->ext}}" class="form-control" maxlength="4" placeholder="EXT" required>
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