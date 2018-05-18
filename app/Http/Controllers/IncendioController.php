<?php

namespace App\Http\Controllers;

use App\Incendio;
use App\Entity;
use Illuminate\Http\Request;

class IncendioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $incendio = new Incendio;
        $evento = new Entity;      

        $evento->create(['nombre'=>$request->input('nombre'), 'ubicacion'=>$request->input('ubicacion')]);                       
        $incendio->create(['entity_id' =>Entity::orderBy('created_at', 'desc')->first()->id, 'objeto_afectado'=>$request->input('objeto_afectado')]);

        return back()->with('success', 'Accidente has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Incendio  $incendio
     * @return \Illuminate\Http\Response
     */
    public function show(Incendio $incendio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Incendio  $incendio
     * @return \Illuminate\Http\Response
     */
    public function edit(Incendio $incendio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Incendio  $incendio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incendio $incendio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Incendio  $incendio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incendio $incendio)
    {
        //
    }
}
