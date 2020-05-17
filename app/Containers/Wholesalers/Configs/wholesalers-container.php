<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Wholesalers Container
    |--------------------------------------------------------------------------
    |
    |
    |
    */
    'clients' => [
        'web' => [
            'opt' => [
                'id' => env('CLIENT_WEB_ADMIN_ID'),
                'secret' => env('CLIENT_WEB_ADMIN_SECRET'),
            ],
        ],
        'mobile' => [
            'admin' => [
                'id' => env('CLIENT_MOBILE_ADMIN_ID'),
                'secret' => env('CLIENT_MOBILE_ADMIN_SECRET'),
            ],
        ],

        // add your other clients here
    ],
];
