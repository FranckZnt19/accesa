<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfils;

class PerfilsController extends Controller
{
    public function index()
    {
        $perfils = Perfils::all();
        return view('perfils',compact('perfils'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $perfil = new Perfils($request->input());
        $perfil->saveOrFail();
        return redirect('perfils');
    }

    public function show($id)
    {
        $perfil = Perfils::find($id);
        //dd($producto);
        return view('editperfil',compact('perfil'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $perfil = Perfils::find($id);
        $perfil->fill($request->input())->saveOrFail();
        return redirect('perfils');
    }

    public function destroy($id)
    {
        $perfil = Perfils::find($id);
        $perfil->delete();
        return redirect('perfils');
    }
}
