<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddtoCart extends Model
{
    protected $table='addto_carts';  
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
