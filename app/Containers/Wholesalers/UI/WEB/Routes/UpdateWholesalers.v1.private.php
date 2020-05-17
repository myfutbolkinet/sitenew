<?php

/** @var Route $router */
$router->patch('wholesalers/index/{id}', [
    'as' => 'web_wholesalers_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);
