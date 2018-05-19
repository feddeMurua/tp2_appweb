<?php

namespace App\Http\Controllers;

use App\ObjectState;
use App\Entity;

use Illuminate\Http\Request;

class FiltrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function listarASpectos()
    {
        //lista todos los aspectos regitrados en la base de datos
        $objeto1 = ObjectState::all();
        $objeto2 = Entity::all();
        //return view('listado',compact('objeto1','objeto2'));
        return view('tabla',compact('objeto1','objeto2'));
    }

 


    public function filtrarFechaRango(Request $data)
    {
        //filtra por la fecha pasada por parametro
        $fecha1=$data->input('fecha1');
        $fecha2=$data->input('fecha2');

    	if ($fecha1!="") {
  			$objeto1 = ObjectState::where('created_at', '>=', $fecha1)
        			->where('created_at', '<=', $fecha2)
                 	->orderBy('created_at')
                 	->get();
            $objeto2 = Entity::where('created_at', '>=', $fecha1)
            		->where('created_at', '<=', $fecha2)
                 	->orderBy('created_at')
                 	->get();
		}else
			$objeto1 = ObjectState::where('created_at', '<=', $fecha2)
                 	->orderBy('created_at')
                 	->get();
            $objeto2 = Entity::where('created_at', '<=', $fecha2)
                 	->orderBy('created_at')
                 	->get();

        return view('tabla',compact('objeto1','objeto2'));
    }

    public function filtrarTipoAspecto(Request $data)
    {
        //filtra los nombres de los aspectos que comienzen con la cadena ingresada
        $nombre=$data->input('aspectName');
        $objeto1 = ObjectState::where('nombre', 'like', $nombre.'%')
                 ->orderBy('created_at')
                 ->get();

        $objeto2 = Entity::where('nombre', 'like', $nombre.'%')
                 ->orderBy('created_at')
                 ->get();

        return view('tabla',compact('objeto1','objeto2'));
    }

    public function filtrarEventos()
    {
        //filtra los nombres de los aspectos que comienzen con la cadena ingresada
        $objeto1 = Entity::all();
        $objeto2=null;
        return view('tabla',compact('objeto1','objeto2'));
    }

    public function filtrarEstadoObjetos()
    {
        //filtra los nombres de los aspectos que comienzen con la cadena ingresada
        $objeto1 = ObjectState::all();
        $objeto2=null;
        return view('tabla',compact('objeto1','objeto2'));
    }

    
}
