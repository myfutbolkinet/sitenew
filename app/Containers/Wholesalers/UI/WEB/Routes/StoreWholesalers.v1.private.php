<?php

/** @var Route $router */
$router->post('wholesalers/index/store', [
    'as' => 'web_wholesalers_store',
    'uses'  => 'Controller@store',
    'middleware' => [
      'auth:web',
    ],
]);
