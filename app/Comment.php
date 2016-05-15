<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function portfolio()
    {
    	return $this->belongTo('App\Portfolio');
    }

    public function user()
    {
    	return $this->belongTo('App\User');
    }
}
