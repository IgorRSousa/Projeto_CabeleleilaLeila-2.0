<?php

use App\Http\Controllers\Agendar;
use App\Http\Controllers\ListarAgenda;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/criarAgendamento', 'AgendamentosController@agendar');
$router->get('/listarAgendamentos', 'AgendamentosController@listarAgenda');
$router->get('/consultarAgendamento/{id}', 'AgendamentosController@consultar');
$router->put('/alterarAgendamento/{id}', 'AgendamentosController@alterar');
$router->delete('/deletarAgendamento/{id}', 'AgendamentosController@deletar');