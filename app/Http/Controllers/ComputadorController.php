<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computador;
use App\Models\Estados;

class ComputadorController extends Controller
{

    public function index()
    {
        $computadores = Computador::all();
        $estados = Estados::all();
        return view('computadores', compact('computadores', 'estados'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $computador = new Computador($request ->input());
        $computador->saveOrFail();
        return redirect('computadores');
    }


    public function show($id)
    {
        $computador = Computador::find($id);
        $estados = Estados::all();
        return view('editComputador', compact('computador', 'estados'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $computador = Computador::find($id);
        $computador->fill($request->input())->saveOrFail();
        return redirect('computadores');
    }


    public function destroy($id)
    {
        $computador = Computador::find($id);
        $computador->delete();
        return redirect('computadores');
    }
}