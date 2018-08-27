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

$router->get('/', function () use ($router) {
    return view('index');
});

$router->get('/quemsomos', ['as' => 'quemsomos', function () use ($router) {
    return view('quemsomos');
}]);

$router->get('/julio', ['as' => 'julio', function () use ($router) {
    return view('casas');
}]);

$router->get('/contato', ['as' => 'contato', function () use ($router) {
    return view('contato');
}]);

$router->get('/laspalmas', ['as' => 'laspalmas', function () use ($router) {
    return view('laspalmas');
}]);

$router->get('/adriano', ['as' => 'adriano', function () use ($router) {
    return view('adriano');
}]);

$router->get('/arilene', ['as' => 'arilene', function () use ($router) {
    return view('arilene');
}]);


$router->get('/contas', 'ContasController@index');

Route::post('/send', 'EmailController@send');
