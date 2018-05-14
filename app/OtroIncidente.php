<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtroIncidente extends Model
{
    //
    protected $fillable = ['entity_id','descripcion'];
  	protected $guarded = ['id'];
}
