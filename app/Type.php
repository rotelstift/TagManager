<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //

    public function templates()
    {
        return $this->hasMany('App\Template');
    }
}
