<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Areas;

class AreasController extends Controller
{
    public function index()
    {
        $areas = Areas::all();
        return view('areas',compact('areas'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $area = new Areas($request->input());
        $area->saveOrFail();
        return redirect('areas');
    }
    
    public function show($id)
    {
        $area = Areas::find($id);
        //dd($producto);
        return view('editArea',compact('area'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $area = Areas::find($id);
        $area->fill($request->input())->saveOrFail();
        return redirect('areas');
    }

    public function destroy($id)
    {
        $area = Areas::find($id);
        $area->delete();
        return redirect('areas');
    }
}
