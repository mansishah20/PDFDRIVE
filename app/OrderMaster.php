<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderMaster extends Model
{
    protected $table='order_masters';  
	protected $fillable=['bookid','userid','email'];
	
    public function book() 
	{
		return $this->belongsTo('App\Book');
	}
	public function user() 
	{
		return $this->belongsTo('App\UserMaster');
	}
}
