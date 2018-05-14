<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjectState extends Model
{
    //
    protected $fillable = ['nombre','ubicacion'];
  	protected $guarded = ['id','fecha_y_hora'];
}
