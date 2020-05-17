<?php

/** @var Route $router */
$router->get('wholesalers/index/{id}', [
    'as' => 'web_wholesalers_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
