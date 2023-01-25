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
        return view('computador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create_action (Request $request)
    {
        $request->validate([
            'ID_Portatilesp' => 'required',
            'Tag' => 'required',
            'Modelo' => 'required',
            'Invetario' => 'required',
            'Especificaciones' =>'required',
            'Carrera' =>'required',
            'Estado' =>'required',
        ]);
        $computadores = new Computador([
            'ID_portatilesp' => $request->ID_portatilesp,
            'Tag' => $request->Tag,
            'Modelo' => $request->Modelo,
            'Inventario' => $request->Inventario,
            'Especificaciones' => $request->Especificaciones,
            'Carrera' => $request->Carrera,
            'Estado' => $request->Estado,

        ]);


        $computadores->save();
        return redirect()->route('computadores')->with('success', 'Registration success. Please login!');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    


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

        $computador->ID_portatilesp = $request->get('ID_portatilesp');
        $computador->Tag = $request->get('Tag');
        $computador->Modelo = $request->get('Modelo');
        $computador->Inventario = $request->get('Inventario');
        $computador->Especificaciones = $request->get('Especificaciones');
        $computador->Carrera = $request->get('Carrera');
        $computador->Estado = $request->get('Estado');

        $computador->save();

        return redirect('/computadores');
    }


    public function destroy($id)
    {
        $computador = Computador::find($id);
        $computador->delete();
        return redirect('/computadores');
    }
}