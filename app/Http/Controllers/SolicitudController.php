<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computador;
use App\Models\Solicitud;
use App\Models\prestamo;

class SolicitudController extends Controller
{

    public function index()
    {
        $solicitud = Solicitud::all();
        $computador = Computador::all();
        return view('solicitud', compact('solicitud','computador'));
    }

    public function create()
    {
        return view('solicitud.create');
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
            'ID_solicitud' => 'required',
            'ID_Portatilesp' => 'required',
            'user_id' =>'required',
            
        ]);
        $solicitud = new Solicitud([
            'ID_solicitud' => $request->ID_solicitud,
            'ID_Portatilesp' => $request->ID_Portatilesp,
            'user_id' => $request->user_id,
        ]);


        $solicitud->save();
        return redirect()->route('solicitud')->with('success', 'Registration success. Please login!');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    


    public function store(Request $request)
    {
        $solicitud = new Solicitud($request ->input());
        $solicitud->saveOrFail();
        return redirect('solicitud');
    }


    public function show($id)
    {
        $solicitud = prestamo::find($id);
        return view('editsolicitud', compact('solicitud'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $solicitud = Solicitud::find($id);

        $solicitud->ID_solicitud = $request->get('ID_solicitud');
        $solicitud->ID_Portatilesp = $request->get('ID_Portatiles');
        $solicitud->user_id = $request->get('user_id');
        

        $solicitud->save();

        return redirect('/solicitud');
    }


    public function destroy($id)
    {
        $solicitud = Solicitud::find($id);
        $solicitud->delete();
        return redirect('/solicitud');
    }
}