<?php

$router->get('/login', [
    'as'   => 'get_opt_login_page',
    'uses' => 'Controller@showLoginPage',
    'domain' => 'opt.'. parse_url(\Config::get('app.url'))['host'],
]);
