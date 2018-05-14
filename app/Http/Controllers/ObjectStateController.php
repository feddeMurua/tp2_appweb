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
        //aca se crea un nuevo registro. Debo llamar a quien genere
        //los campos y el evento
        
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
    public function show($id)
    {
        //
        $objeto=ObjectState::find($id);
        //en $objeto tengo aquel que coincide con $id
        return 'Encontre el objeto, hacer algo luego';
        //return  view('libro.show',compact('objeto'));
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
    public function update(Request $request, AguaCloaca $aguaCloaca)
    {
        //
        $object = $objectState->update($request->all());
        return redirect('ObjectState/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ObjectState  $objectState
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        ObjectState::find($id)->delete();
        return redirect('ObjectState/index')->with('success','Registro eliminado satisfactoriamente');
    }
}
