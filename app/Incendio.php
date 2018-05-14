<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incendio extends Model
{
    //
    protected $fillable = ['entity_id','objeto_afectado'];
  	protected $guarded = ['id'];
}
