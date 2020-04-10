<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    //
    public function destinations()
    {
        return $this->belongsToMany('App\Destination');
    }
}
