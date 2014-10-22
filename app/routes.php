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
	return View::make('developersBestFriend');
});
Route::get('/lorem-ipsum', function()
{
	return View::make('loremIpsumGenerator');
});
Route::post('/lorem-ipsum','LoremIpsumController@showParagraphs');

Route::get('/random-user', function()
{
	return View::make('randomUserGenerator');
});
Route::post('/random-user', 'RandomUserController@showUsers');
