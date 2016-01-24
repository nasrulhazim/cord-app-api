<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// set welcome message
$app->get('/', 'Controller@welcome');

// show all
$app->get('location', 'LocationController@index'); 

// create new record
$app->post('location', 'LocationController@store');

// show particular record
$app->get('location/{id}', 'LocationController@show');

 // update record
$app->put('location/{id}', 'LocationController@update');

 // delete record
$app->delete('location/{id}', 'LocationController@destroy');