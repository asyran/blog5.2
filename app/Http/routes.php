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

Route::get('/', function () {
    return view('welcome');
});


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/about','AboutController@about');

Route::get('/post',['as' => 'post.index','uses'=>'PostController@showAllPost']);

Route::get('/post/create',['as' => 'post.create','uses'=>'PostController@createPost']);

Route::post('/post/create/save',['as' => 'post.create.save','uses'=>'PostController@savePost']);

Route::get('/post/edit/(id)',['as' => 'post.edit','uses'=>'PostController@editPost']);

Route::get('/post/delete/{id}',['as' => 'post.delete','uses'=>'PostController@deletePost']);


Route::resource('/blog','BlogController');

