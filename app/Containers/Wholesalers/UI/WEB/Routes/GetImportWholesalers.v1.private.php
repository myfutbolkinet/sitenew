<?php

/** @var Route $router */
$router->get('/wholesalers/import', [
    'as'   => 'get_admin_wholesalers_import_page',
    'uses'       => 'Controller@getWholesalersImport',
    'domain' => 'admin.'. parse_url(\Config::get('app.url'))['host'],
  /*  'middleware' => [
        'auth:admin'
    ],*/
]);


$router->post('/wholesalers/import', [
    'as'   => 'post_admin_wholesalers_import',
    'uses'       => 'Controller@postWholesalersImport',
    'domain' => 'admin.'. parse_url(\Config::get('app.url'))['host'],
    /*  'middleware' => [
          'auth:admin'
      ],*/
]);