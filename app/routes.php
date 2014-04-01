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

//Route::get('/authenticated', array('before' => 'basic.once', function()
//{
//    return "You are authenticated @ test auth";
//}));

//header('Access-Control-Allow-Origin: *');

Route::get('/authenticated', array('before' => 'basic.once', function()
{
    return "You are authenticated @ test auth";
}));

Route::post('/authenticate', array('before' => 'basic.once', function()
{
    return "You are authenticating @ test auth";
}));

Route::get('/', function() {
    return Redirect::to('/authenticated');
});

Route::get('auth', 'Tappleby\AuthToken\AuthTokenController@index');
Route::post('auth', 'Tappleby\AuthToken\AuthTokenController@store');
Route::delete('auth', 'Tappleby\AuthToken\AuthTokenController@destroy');
