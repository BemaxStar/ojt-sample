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

Route::get('/','RegisterController@index');

Route::post('/save',['as' => 'save','uses' => 'RegisterController@store']);

Route::get('/{user_id}',['as' => 'edit','uses' => 'RegisterController@show']);

Route::post('/{user_id}/update',['as' => 'update','uses' => 'RegisterController@update']);

Route::get('/{user_id}/delete',['as' => 'delete','uses' => 'RegisterController@destroy']);

Route::get('/registrationForm', function () {
    return view('regForm');
});

Route::get('/assignment2', 'SampleController@assignment');

Route::get('/select', 'SampleController@selectQuery');

Route::get('/select2', 'SampleController@selectQuery2');

Route::get('/insert', 'SampleController@insertQuery');

Route::get('/update', 'SampleController@updateQuery');

Route::get('/delete', 'SampleController@deleteQuery');