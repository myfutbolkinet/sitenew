<?php

/** @var Route $router */
$router->get('wholesalers/index/create', [
    'as' => 'web_wholesalers_create',
    'uses'  => 'Controller@create',
    'middleware' => [
      'auth:web',
    ],
]);
