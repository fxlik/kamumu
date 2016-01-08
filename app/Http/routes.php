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

Route::get('/home', function(){
  return view('welcome');
});
