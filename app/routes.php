<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
 $view = View::make('corpus/core')->nest('animus', 'animus/home');
 return $view;
});

Route::get('/home/{page}', function($page = null)
{
	return View::make('/home/'.$page);
});
