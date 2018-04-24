<?php

use Monolog\Handler\StreamHandler;

return [

    /*
    |--------------------------------------------------------------------------
    | Canal de registro predeterminado
    | ------------------------------------------------- -------------------------
    |
    | Esta opción define el canal de registro predeterminado que se usa al escribir
    | mensajes a los registros. El nombre especificado en esta opción debe coincidir
    | uno de los canales definidos en la matriz de configuración de "canales".|
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Canales de registro
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede configurar los canales de registro para su aplicación. Fuera de
    | la caja, Laravel usa la biblioteca de registro Monolog PHP. Esto da
    | usted una variedad de manipuladores / formateadores de registro poderosos para utilizar.
    |
    | Controladores disponibles: "single", "daily", "slack", "syslog",
    |                               "errorlog", "monolog",
    |                                "custom", "stack"
    |
    */

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single'],
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => 'debug',
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => 'debug',
            'days' => 7,
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
            'level' => 'critical',
        ],

        'stderr' => [
            'driver' => 'monolog',
            'handler' => StreamHandler::class,
            'with' => [
                'stream' => 'php://stderr',
            ],
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => 'debug',
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => 'debug',
        ],
    ],

];
