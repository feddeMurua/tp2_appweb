<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BienPublico extends Model
{
    //
    protected $fillable = ['object_state_id','estado'];
  	protected $guarded = ['id'];
}
