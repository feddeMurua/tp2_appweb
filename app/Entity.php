<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $fillable = ['nombre','fecha_y_hora', 'ubicacion'];
}
