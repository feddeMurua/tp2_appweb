<?php

namespace App\Http\Controllers;

use App\AguaCloaca;
use Illuminate\Http\Request;

class AguaCloacaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $agua = AguaCloaca::all(); 
        return view('listado',compact('agua'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $aguacloaca = new AguaCloaca;
        $aguacloaca->create($request->all());
        return redirect('ObjectState/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AguaCloaca  $aguaCloaca
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $aguacloaca=AguaCloaca::find($id);
        //en $objeto tengo aquel que coincide con $id
        return 'Encontre el objeto, hacer algo luego';
        //return  view('libro.show',compact('objeto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AguaCloaca  $aguaCloaca
     * @return \Illuminate\Http\Response
     */
    public function edit(AguaCloaca $aguaCloaca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AguaCloaca  $aguaCloaca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        AguaCloaca::find($id)->update($request->all());
        return redirect('ObjectState/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AguaCloaca  $aguaCloaca
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        AguaCloaca::find($id)->delete();
        return redirect('ObjectState/index')->with('success','Registro eliminado satisfactoriamente');
    }
}