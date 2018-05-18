<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjectState extends Model
{
    //
    protected $fillable = ['nombre','fecha_y_hora','ubicacion'];
  	protected $guarded = ['id'];
}
