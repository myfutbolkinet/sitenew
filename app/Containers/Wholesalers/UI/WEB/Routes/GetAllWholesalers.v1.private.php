<?php

/** @var Route $router */
$router->get('/dashboard', [
    'as'   => 'get_opt_dashboard_page',
    'uses'       => 'Controller@index',
    'domain' => 'opt.'. parse_url(\Config::get('app.url'))['host'],
    'middleware' => [
        'auth:opt'
    ],
]);