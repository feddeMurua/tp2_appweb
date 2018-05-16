<?php

namespace App\Http\Controllers;

use App\Accidente;
use Illuminate\Http\Request;

class AccidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $accidentes = Accidente::all(); 
        return view('listado',compact('accidentes'));
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
        $accidente = new Accidente;
        $accidente->create($request->all());
        return redirect('Accidente/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accidente  $accidente
     * @return \Illuminate\Http\Response
     */
    public function show(Accidente $accidente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accidente  $accidente
     * @return \Illuminate\Http\Response
     */
    public function edit(Accidente $accidente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accidente  $accidente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accidente $accidente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accidente  $accidente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accidente $accidente)
    {
        //
    }
}