<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    //

    public function type()
    {
        return $this->belongsTo('App\Type');
    }
}
