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

Route::group(array('prefix' => 'api/', 'before' => 'auth.basic'), function()
{
    Route::get('/', function() {
	return View::make('hello');
});

Route::Resource('processes', 'ProcessesController');
//Route::put('processes/{pid}/{prio}', 'ProcessesController@update');
//Route::post('processes/{cmd}', 'ProcessesController@store');

});

