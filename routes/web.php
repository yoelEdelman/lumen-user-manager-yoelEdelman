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

//$router->get('/', function () use ($router) {
//    return $router->app->version();
//});

$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});

$router->get('/', [
    'as' => 'users.index', 'uses' => 'UserController@index'
]);

$router->get('users', [
    'as' => 'users.index', 'uses' => 'UserController@index'
]);

$router->get('users/{id}/show', [
    'as' => 'users.show', 'uses' => 'UserController@show'
]);

$router->get('users/create', [
    'as' => 'users.create', 'uses' => 'UserController@create'
]);

$router->post('users', [
    'as' => 'users.store', 'uses' => 'UserController@store'
]);

$router->get('users/{id}/edit', [
    'as' => 'users.edit', 'uses' => 'UserController@edit'
]);

$router->put('users/{id}', [
    'as' => 'users.update', 'uses' => 'UserController@update'
]);

$router->delete('users/{id}', [
    'as' => 'users.delete', 'uses' => 'UserController@destroy'
]);
