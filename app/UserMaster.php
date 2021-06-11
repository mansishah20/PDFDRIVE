<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
/*
use Illuminate\Auth\Authenticatable;
Use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
*/

class UserMaster extends Model
{

	protected $table='user_masters';  
	protected $fillable=['uname','uemail','upassword','utype'];
	
	
    public function download() 
	{
    return $this->hasMany('App\Download');
	}
	public function addtocart() 
	{
    return $this->hasMany('App\AddtoCart');
	}
	public function order() 
	{
    return $this->hasMany('App\OrderMaster');
	}
	public function comments() 
	{
    return $this->hasMany('App\Comments');
	}
}
