<?php

namespace App\Http\Controllers;

use App\Robo;
use App\Entity;
use Illuminate\Http\Request;

class RoboController extends Controller
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
        $robo = new Robo;
        $evento = new Entity;      

        $evento->create(['nombre'=>$request->input('nombre'), 'ubicacion'=>$request->input('ubicacion')]);                       
        $robo->create(['entity_id' =>Entity::orderBy('created_at', 'desc')->first()->id, 'tipo'=>$request->input('tipo')]);

        return back()->with('success', 'Accidente has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Robo  $robo
     * @return \Illuminate\Http\Response
     */
    public function show(Robo $robo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Robo  $robo
     * @return \Illuminate\Http\Response
     */
    public function edit(Robo $robo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Robo  $robo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Robo $robo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Robo  $robo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Robo $robo)
    {
        //
    }
}
