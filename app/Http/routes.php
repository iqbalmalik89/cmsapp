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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('hello' , 'HelloController@index');

Route::post('login', 'LoginController@login');

Route::get('login', function() {
  return view('login');
});

// Route::get('login', array('as' => 'login', 'before' => 'guest', function()
// {
// 	return View::make('login');
// }));

// Route::post('login', array('before' => 'guest|csrf', function()
// {
// 	if (Auth::attempt(array('username' => Input::get('email'), 'password' => Input::get('password'))))
// 	{
// 		return Redirect::route('hello');
// 	}
	
// 	return View::make('login')->with('error', true);
// }));