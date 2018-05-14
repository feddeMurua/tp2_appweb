@extends('layouts.layout')
@section('content')

 <table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Fecha y Hora</th>
 
                </tr>
            </thead>
            <tbody>
                @foreach($objetos as $object)
                <tr>
                    <td>{{ $object->nombre }}</td>
                    <td>{{ $object->fecha_y_hora }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
 </div>
</div>
@endsection