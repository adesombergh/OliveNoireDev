<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    /**
     * The artist that has this show.
     */
    public function artist()
    {
        return $this->belongsToMany('App\Artist');
    }

}
