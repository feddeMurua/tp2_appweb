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


    public function filtrarFechaRango($fecha1,$fecha2="")
    {
        //filtra por la fecha pasada por parametro
    	if ($fecha2!="") {
  			$objeto1 = ObjectState::where('created_at', '>=', $fecha1)
        			->where('created_at', '<=', $fecha2)
                 	->orderBy('created_at')
                 	->get();
            $objeto2 = Entity::where('created_at', '>=', $fecha1)
            		->where('created_at', '<=', $fecha2)
                 	->orderBy('created_at')
                 	->get();
		}else
			$objeto1 = ObjectState::where('fecha_y_hora', '<=', $fecha1)
                 	->orderBy('fecha_y_hora')
                 	->get();
            $objeto2 = Entity::where('fecha_y_hora', '<=', $fecha1)
                 	->orderBy('fecha_y_hora')
                 	->get();

        return view('tabla',compact('objeto1','objeto2'));
    }

    public function filtrarTipoAspecto($nombre)
    {
        //filtra los nombres de los aspectos que comienzen con la cadena ingresada
        $objeto1 = ObjectState::where('nombre', 'like', $nombre.'%')
                 ->orderBy('fecha_y_hora')
                 ->get();

        $objeto2 = Entity::where('nombre', 'like', $nombre.'%')
                 ->orderBy('fecha_y_hora')
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
