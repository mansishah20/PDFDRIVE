<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table='comments';  
	protected $fillable=['bookid','userid','star','message'];
	
    public function book() 
	{
		return $this->belongsTo('App\Book');
	}
	public function user() 
	{
		return $this->belongsTo('App\User');
	}
}
