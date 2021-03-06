<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function category() {
    	return $this->belongsTo('App\Category');
	}

	public function cinemas() {
		return $this->belongsToMany('App\Cinema');
	}

	public function sessions() {
		return $this->belongsToMany('App\Session');
	}

	public function orders() {
		return $this->hasMany('App\Order');
	}

	public function users() {
		return $this->belongsToMany('App\User');
	}
}
