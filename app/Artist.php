<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /**
     * The releases that belong to the artist.
     */
    public function releases()
    {
        return $this->belongsToMany('App\Release');
    }

    /**
     * The shows that belong to the artist.
     */
    public function shows()
    {
        return $this->hasMany('App\Show');
    }

}
