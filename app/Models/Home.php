<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public function categories() 
	{
		return $this->belongsTo('App\Category');
	}

}
