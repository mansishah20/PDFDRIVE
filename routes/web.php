<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserMasterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
	
});
Route::resource('/category','CategoryController');
Route::resource('/book','BookController');
Route::resource('/usermaster','UserMasterController');
Route::resource('/download','DownloadController');
Route::resource('/addtocart','AddtoCartController');
Route::resource('/ordermaster','OrderMasterController');
Route::resource('/comment','CommentsController');
Route::get('/category/{id}/destroy','CategoryController@destroy');
Route::get('/book/{id}/destroy','BookController@destroy');
Route::get('/usermaster/{id}/destroy','UserMasterController@destroy');

Route::get('/home','homeController@index');
Route::get('/home/{id}/view','homeController@view');
Route::get('/home/{id}/home/signin','homeController@signin');
Route::get('/home/{id}/home/index','homeController@index');
Route::get('/home/{id}/home/about','homeController@about');
Route::get('/home/{id}/home/contact','homeController@contact');




Route::get('/signin','homeController@signin');
Route::get('/home/signin','homeController@signin');

Route::get('/home/{id}/catview','homeController@catview');
Route::get('/testdata',[BookController::class,"testdata"]);

Route::get('/home/login','homeController@login');
Route::get('/home/{id}/preview','homeController@preview');
Route::get('/usermaster','UserMasterController@show');
Route::post(
    '/usermaster/check',
    [UserMasterController::class, 'check']
)->name('check');
Route::get(
    '/home/logout',
    [UserMasterController::class, 'logout']
)->name('logout');


Route::resource('/contact','ContactController');

Route::get('/home/contact','homeController@contact');
Route::get('/home/about','homeController@about');
Route::get('/home/tac','homeController@tac');
Route::get('/home/index','homeController@index');
Route::get('/home/buy','homeController@buy');
Route::get('/home/feedback','homeController@feedback');
Route::get('/home/search','homeController@search');