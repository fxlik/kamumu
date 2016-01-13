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

Route::get('/saya', function () {
    return view('saya');
});

Route::get('/login', function(){
  return view('login2');
});

Route::get('/register', function(){
  return view('register');
});

Route::get('/alumni', function(){
  return view('alumni');
});

Route::get('/tentang', function(){
  return view('tentangalumni');
});

Route::get('/event', function(){
  return view('event');
});

Route::get('/layouts', function(){
  return view('layouts.main');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// test_validasi_form
Route::get('product/create'        , 'ProductController@create');
Route::post('product/store'        , 'ProductController@store');

Route::get('/auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('/auth/google', 'Auth\AuthController@redirectToProvider2');
Route::get('/callback2', 'Auth\AuthController@handleProviderCallback2');