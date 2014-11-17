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

Route::get('/', 'HomeController@index');
Route::get('blog', 'BlogController@index');
Route::get('about', 'AboutController@index');
Route::get('events', 'OccasionController@index', array('before' => 'auth', function()
{
    return View::make('events');
}));

Route::get('/login', function()
{
    return View::make('login');
});
 
Route::post('/login', function()
{
    // Validation later - for now let’s just get the creds
    Auth::attempt( 
        array(
            'username' => Input::get('username'), 
            'password' => Input::get('password')
        ) 
    );
 
    return Redirect::to('events');
});
 
Route::get('/logout', function()
{
    Auth::logout();
    
    return View::make('logout');
});
