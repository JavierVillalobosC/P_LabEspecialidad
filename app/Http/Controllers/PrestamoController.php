<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computador;
use App\Models\Estados;
use App\Models\prestamo;
use App\Models\User;
class PrestamoController extends Controller
{

    public function index()
    {
        $prestamos = prestamo::all();
        $users = User::all();
        return view('prestamo', compact('prestamos','users'));
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

        $prestamos = new prestamo($request ->input());
        $prestamos->saveOrFail();
        return redirect('prestamo');

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
        $prestamo->fill($request->input())->saveOrFail();
        

        return redirect('/prestamo');
    }


    public function destroy($id)
    {
        $prestamo = prestamo::find($id);
        $prestamo->delete();
        return redirect('/prestamo');
    }
}