<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
	protected $table='downloads';  
	protected $fillable=['bookid','userid'];
	
    public function book() 
	{
		return $this->belongsTo('App\Book');
	}
	public function user() 
	{
		return $this->belongsTo('App\User');
	}
}
