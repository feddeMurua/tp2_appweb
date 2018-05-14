<?php

namespace App\Http\Controllers;

use App\BienPublico;
use Illuminate\Http\Request;

class BienPublicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bien = BienPublico::all(); 
        return view('listado',compact('bien'));
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
        $bienpublico = new BienPublico;
        $bienpublico->create($request->all());
        return redirect('ObjectState/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BienPublico  $bienPublico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $bienpublico=BienPublico::find($id);
        //en $objeto tengo aquel que coincide con $id
        return 'Encontre el objeto, hacer algo luego';
        //return  view('libro.show',compact('objeto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BienPublico  $bienPublico
     * @return \Illuminate\Http\Response
     */
    public function edit(BienPublico $bienPublico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BienPublico  $bienPublico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        BienPublico::find($id)->update($request->all());
        return redirect('ObjectState/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BienPublico  $bienPublico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        BienPublico::find($id)->delete();
        return redirect('ObjectState/index')->with('success','Registro eliminado satisfactoriamente');
    }
}
