<?php

/** @var Route $router */
$router->get('wholesalers/index/{id}/edit', [
    'as' => 'web_wholesalers_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);
