<?php

namespace App\Http\Controllers;

use App\ObjectState;
use Illuminate\Http\Request;

class ObjectStateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */


    public function index()
    {
        //obtiene todos los registros de la tabla y se
        //los pasa a la vista para mostrarlos
        $objetos = ObjectState::all(); 
        return view('listado',compact('objetos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //aca se crea un nuevo registro. 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $object = new ObjectState;
        $object->create($request->all());
        return redirect('ObjectState/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ObjectState  $objectState
     * @return \Illuminate\Http\Response
     */
    public function show(ObjectState $objectState)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ObjectState  $objectState
     * @return \Illuminate\Http\Response
     */
    public function edit(ObjectState $objectState)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ObjectState  $objectState
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ObjectState $objectState)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ObjectState  $objectState
     * @return \Illuminate\Http\Response
     */
    public function destroy(ObjectState $objectState)
    {
        //
    }
}
