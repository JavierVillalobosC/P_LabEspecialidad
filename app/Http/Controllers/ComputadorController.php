<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computador;

class ComputadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computadores = Computador::all();
        return view('computador.index')->with('computadores', $computadores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return redirect()->route('computador')->with('success', 'Registration success. Please login!');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computador = Computador::find($id);
        return view('computador/edit')->with('computador', $computador);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

        return redirect('/computador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $computador = Computador::find($id);
        $computador->delete();
        return redirect('/computador');
    }
}