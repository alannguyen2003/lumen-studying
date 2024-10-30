<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group([ 'prefix' => 'api/v1'], function () use ($router) {

    //Authentication and Authorization routes
    $router->post('login', 'AuthController@login');
    $router->post('logout', 'AuthController@logout');
    $router->post('refresh', 'AuthController@refresh');
    $router->post('user-profile', 'AuthController@me');

    //Product Routes
    $router->get('/products/index', 'ProductController@index');
    $router->get('/products/{id}', 'ProductController@findById');
    $router->delete('/products/delete/{id}', 'ProductController@deleteById');
});




