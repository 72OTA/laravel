<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Transmisor predeterminado
    |--------------------------------------------------------------------------
    |
    | Esta opción controla la emisora ​​por defecto que será utilizada por el
    | marco cuando un evento necesita ser transmitido. Puede configurar esto para
    | cualquiera de las conexiones definidas en la matriz de "conexiones" a continuación.
    |
    | Compatible: "empujador", "redis", "log", "nulo"
    |
    */

    'default' => env('BROADCAST_DRIVER', 'null'),

    /*
    |--------------------------------------------------------------------------
    | Conexiones de transmisión
    |--------------------------------------------------------------------------
    |
    | Aquí puede definir todas las conexiones de difusión que se usarán
    | para transmitir eventos a otros sistemas o sobre websockets. Muestras de
    | cada tipo de conexión disponible se proporciona dentro de este conjunto.
    |
    */

    'connections' => [

        'pusher' => [
            'driver' => 'pusher',
            'key' => env('PUSHER_APP_KEY'),
            'secret' => env('PUSHER_APP_SECRET'),
            'app_id' => env('PUSHER_APP_ID'),
            'options' => [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'encrypted' => true,
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'log' => [
            'driver' => 'log',
        ],

        'null' => [
            'driver' => 'null',
        ],

    ],

];
