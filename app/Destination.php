<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //
    public function information()
    {
        return $this->belongsToMany('App\Information');
    }
}
