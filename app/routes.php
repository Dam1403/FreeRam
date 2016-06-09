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
Route::get('/', function()
{
});
*/

/*
Home page
*/
Route::get('/','RamsController@getinfo');

/*
Page from tutorial
*/
Route::get('/users', function()
{
     $users = User::all();

    return View::make('users')->with('users', $users);
});

/*
Download ram page
*/
Route::get('/ram', function()
{
	return View::make('ram');
});
Route::post('/ram','RamsController@create');

/*
Complaint page
*/
Route::get('/complain',function(){
	return View::make('complain');
});
Route::post('/complain', 'RamsController@complaints');
