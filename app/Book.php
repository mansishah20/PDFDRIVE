<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Book extends Model
{
    protected $table='books';  
	protected $fillable=['bname','bauthor','bpage','bsize','bcover','bpdf','blanguage','bpubdate','bdescribe','catid'];
	
	public function getdata()
	{
		return DB::Table('books')
		->join('categories','books.catid','=','categories.id')
		->where('books.catid',"categories.id")
		->get();
	}
	public function categories() 
	{
		return $this->belongsTo('App\Category');
	}

	public function getcat() 
	{
		return $this->belongsTo('App\Category');
	}
	
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
	