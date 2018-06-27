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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/mhs', 'mhsController@index');
$app->get('/mhs/{id}', 'mhsController@show');
$app->post('/mhs', 'mhsController@store');
$app->put('/mhs/{id}', 'mhsController@update');
$app->delete('/mhs/{id}', 'mhsController@destroy');