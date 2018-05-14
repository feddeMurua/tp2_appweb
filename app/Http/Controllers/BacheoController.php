<?php

namespace App\Http\Controllers;

use App\Bacheo;
use Illuminate\Http\Request;

class BacheoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bacheo = Bacheo::all(); 
        return view('listado',compact('bacheo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //este deriva a un formulario, el cual debe tomar todos
        //los parametros del bache (nombre, fecha_y_hora, ubicacion, object_state_id (recuperarlo y pasarlo), estado(mostrar opciones y tomar el elegido)) y luego de todo esto llama a store para ser almacenado en la base de datos

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
        $bacheo = new Bacheo;
        $bacheo->create($request->all());
        return redirect('ObjectState/index')
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bacheo  $bacheo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $bacheo=Bacheo::find($id);
        //en $objeto tengo aquel que coincide con $id
        return 'Encontre el objeto, hacer algo luego';
        //return  view('libro.show',compact('objeto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bacheo  $bacheo
     * @return \Illuminate\Http\Response
     */
    public function edit(Bacheo $bacheo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bacheo  $bacheo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Bacheo::find($id)->update($request->all());
        return redirect('ObjectState/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bacheo  $bacheo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Bacheo::find($id)->delete();
        return redirect('ObjectState/index')->with('success','Registro eliminado satisfactoriamente');
    }
}
