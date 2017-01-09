<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','ProductController@index');
Route::group(['prefix'=>'user'],function() {
  Route::group(['middleware'=>'guest'],function(){
    Route::get('/register','UserController@getRegister');
    Route::post('/register','UserController@postRegister');
    Route::get('/login','UserController@getLogin');
    Route::post('/login','UserController@postLogin');
  });
});
  Route::group(['middleware'=>'auth'],function(){
    Route::get('/shopping-cart/{my}','ProductController@getCart');
    Route::get('/add-to-cart/{id}',[
      'uses'=>'ProductController@getAddToCart',
      'as' => 'AddToCart']);
    Route::group(['prefix'=>'user'],function(){
      Route::get('/profile/{username}','UserController@getProfile');
      Route::get('/logout','UserController@logout');
    });
  });
