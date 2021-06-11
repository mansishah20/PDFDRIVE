<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';  
	protected $fillable=['catname','caticon'];
	
	public function books() 
	{
    return $this->hasMany('App\Book');
	}

	public function home() 
	{
    return $this->hasMany('App\Home');
	}

}
