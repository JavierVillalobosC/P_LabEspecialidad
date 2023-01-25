<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computador;
use App\Models\Estados;
use App\Models\prestamo;

class PrestamoController extends Controller
{

    public function index()
    {
        $prestamos = prestamo::all();
       
        return view('prestamo', compact('prestamos'));
    }

    public function create()
    {
        return view('prestamo.create');
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
            'ID_Prestamo' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'fecha_devolucion' => 'required',
            'user_id' =>'required',
            
        ]);
        $prestamos = new prestamo([
            'ID_Prestamo' => $request->ID_Prestamo,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'fecha_devolucion' => $request->fecha_devolucion,
            'user_id' => $request->user_id,
        ]);


        $prestamos->save();
        return redirect()->route('prestamo')->with('success', 'Registration success. Please login!');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    


    public function store(Request $request)
    {
        $prestamo = new prestamo($request ->input());
        $prestamo->saveOrFail();
        return redirect('prestamo');
    }


    public function show($id)
    {
        $prestamo = prestamo::find($id);
        return view('editprestamo', compact('prestamo'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $prestamo = prestamo::find($id);

        $prestamo->ID_Prestamo = $request->get('ID_prestamo');
        $prestamo->fecha = $request->get('fecha');
        $prestamo->hora = $request->get('hora');
        $prestamo->fecha_devolucion= $request->get('fecha_devolucion');
        $prestamo->user_id = $request->get('user_id');
        

        $prestamo->save();

        return redirect('/prestamo');
    }


    public function destroy($id)
    {
        $prestamo = prestamo::find($id);
        $prestamo->delete();
        return redirect('/prestamo');
    }
}