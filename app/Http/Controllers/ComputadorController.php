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
    public function store(Request $request)
    {
        request()->validate([
            'ID_Portatilesp' => 'required',
            'Tag' => 'required',
            'Modelo' => 'required',
            'Invetario' => 'required',
            'Especificaciones' =>'required',
            'Carrera' =>'required',
            'Estado' =>'required',
        ]);
        $computadores = new Computador();

        $computadores->ID_portatilesp = $request->get('ID_portatilesp');
        $computadores->Tag = $request->get('Tag');
        $computadores->Modelo = $request->get('Modelo');
        $computadores->Inventario = $request->get('Inventario');
        $computadores->Especificaciones = $request->get('Especificaciones');
        $computadores->Carrera = $request->get('Carrera');
        $computadores->Estado = $request->get('Estado');

        $computadores->save();

        return redirect('/computadores');

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

        return redirect('/computadores');
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
        return redirect('/computadores');
    }
}