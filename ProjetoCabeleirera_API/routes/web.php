<?php

use App\Http\Controllers\Agendar;
use App\Http\Controllers\ListarAgenda;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/agendar', 'AgendamentosController@agendar');
$router->get('/listarAgenda', 'AgendamentosController@listarAgenda');
$router->get('/consultar/{id}', 'AgendamentosController@consultar');
$router->put('/alterar/{id}', 'AgendamentosController@alterar');