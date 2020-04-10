<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //
    public function informations()
    {
        return $this->belongsToMany('App\Information');
    }
}
