<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accidente extends Model
{
    //
    protected $fillable = ['entity_id','gravedad'];
  	protected $guarded = ['id'];
}
