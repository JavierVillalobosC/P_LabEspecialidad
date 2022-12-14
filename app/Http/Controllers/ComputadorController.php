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
        $computadores = new Computador();

        $computadores->modelo = $request->get('modelo');
        $computadores->descripcion = $request->get('descripcion');
        $computadores->estatus = $request->get('estatus');
        $computadores->cantidad = $request->get('cantidad');

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
        return view('computador.edit')->with('computador', $computador);
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

        $computador->modelo = $request->get('modelo');
        $computador->descripcion = $request->get('descripcion');
        $computador->estatus = $request->get('estatus');
        $computador->cantidad = $request->get('cantidad');

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
