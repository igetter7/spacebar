<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'], function () {	
	Route::post('subscription','SiteController@subscription');
	Route::get('auth/facebook', 'UserController@redirectToProvider');	
	Route::get('auth/facebook/callback', 'UserController@handleProviderCallback');	
   	Route::get('/','SiteController@landing');	
   	Route::post('/upload','PortfolioController@upload');	
	Route::post('/create','UserController@create');	
	Route::get('/login',function(){

	});
	Route::get('/members','SiteController@members');
	Route::get('/blogs','SiteController@blogs');
	Route::get('/about','SiteController@about');
	Route::get('/logout','SiteController@logout');
	Route::resource('/ports','PortfolioController');			
	Route::resource('/follow','FollowingController');
	Route::resource('/like','LikeController');
	Route::get('{name}','PortfolioController@index');
	Route::get('{name}/works','PortfolioController@index');
	Route::get('{name}/works/{slug}','PortfolioController@show');
	Route::get('{name}/about','UserController@about');
	Route::get('{name}/contact','UserController@contact');
	Route::get('{name}/blog','BlogController@index');
	Route::get('{name}/blog/{slug}','BlogController@show');	
});
Route::get('/api/v1/',function(){
	$array = ['status'=>200,'text'=>'it is ok.'];	
	return json_encode($array);
});
Route::get('/api/v1/{end_point?}','ApiController@index')->where('end_point','(.*)');