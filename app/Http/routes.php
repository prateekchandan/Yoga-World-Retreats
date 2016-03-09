<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
	Route::get('/', function () {
   	 return view('welcome');
	});
	
    Route::auth();
    Route::get('/account', array('as'=>'home','uses'=>'HomeController@index'));
    
    Route::get('/business', array('as'=>'business.show','uses'=>'BusinessController@index'));
    Route::get('/business/create', array('as'=>'business.create','uses'=>'BusinessController@showform'));
    Route::get('/business/edit', array('as'=>'business.edit','uses'=>'BusinessController@showedit'));
    Route::post('/business/create', array('as'=>'business.create','uses'=>'BusinessController@registerbusiness'));

    Route::get('/currency/{iso}', 'WelcomeController@changeiso');
});
