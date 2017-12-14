<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adjective extends Model
{
    //
    public function nouns()
    {
    	return $this->belongsToMany('App\Noun')->withTimestamps();
	}
}
