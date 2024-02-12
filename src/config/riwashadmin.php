<?php

use Riwash\Auth\Models\RiwashAdmin;


return [
    'prefix' => env('RIWASH_ADMIN_PREFIX', 'riwash'),

    'guards' => [
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
    ],


    'providers' => [
        'admins' => [
            'driver' => 'eloquent',
            'model' => RiwashAdmin::class,
        ],
    ],


    'passwords' => [
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],
    'password_timeout' => 10800,

];