<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noun extends Model
{
    //
    public function adjectives()
    {
        return $this->belongsToMany('App\Adjective')->withTimestamps();
    }
}
