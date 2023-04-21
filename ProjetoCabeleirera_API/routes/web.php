<?php

use App\Http\Controllers\Agendar;
use App\Http\Controllers\ListarAgenda;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/agendar', 'Agendar@agendar');
$router->get('/listarAgenda', 'ListarAgenda@listarAgenda');