<?php

/** @var Route $router */
$router->delete('wholesalers/index/{id}', [
    'as' => 'web_wholesalers_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
