<?php

use App\Http\Controllers\Agendar;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/agendar', 'Agendar@agendar');