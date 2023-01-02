<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;
use App\Models\Perfils;
use App\Models\Areas;

class EmpleadosController extends Controller
{
    public function index()
    {
        $empleados = Empleados::select('empleados.id','empleados.nombre','alias','correo','nacimiento','domicilio','telefono','ingreso','salario','id_area','codigo','id_perfil','perfils.nombre AS nombrep')
        ->join('areas','areas.id','=','empleados.id_area')->join('perfils','perfils.id','=','empleados.id_perfil')->get();
        $perfils = Perfils::all();
        $areas = Areas::all();
        return view('empleados',compact('empleados','perfils','areas'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $empleado = new Empleados($request->input());
        $empleado->saveOrFail();
        return redirect('empleados');
    }

    public function show($id)
    {
        $empleado = Empleados::find($id);
        $perfils = Perfils::all();
        $areas = Areas::all();
        //dd($producto);
        return view('editEmpleado',compact('empleado','perfils','areas'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $empleado = Empleados::find($id);
        $empleado->fill($request->input())->saveOrFail();
        return redirect('empleados');
    }

    public function destroy($id)
    {
        $empleado = Empleados::find($id);
        $empleado->delete();
        return redirect('empleados');
    }
}
