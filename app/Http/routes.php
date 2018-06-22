<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| POST, GET, PUT, DELETE
*/






Route::resource('/','FrontController@index'); 
Route::resource('contacto','FrontController@contacto'); 
Route::resource('reviews','FrontController@reviews'); 
Route::resource('admin','FrontController@admin'); 


Route::resource('usuario','UsuarioController'); 


 
