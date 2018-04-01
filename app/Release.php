<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    /**
     * The artists that belongs to a release.
     */
    public function artists()
    {
        return $this->belongsToMany('App\Artist');
    }
}
