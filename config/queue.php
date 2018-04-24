<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Nombre predeterminado de conexión de cola
    | ------------------------------------------------- -------------------------
    |
    | La cola API de Laravel admite una variedad de back-ends a través de un único
    | API, que le proporciona un acceso conveniente a cada back-end utilizando el mismo
    | sintaxis para cada uno Aquí puede definir una conexión predeterminada.
    |
    */

    'default' => env('QUEUE_DRIVER', 'sync'),

    /*
    |--------------------------------------------------------------------------
    | Conexiones de cola
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede configurar la información de conexión para cada servidor que
    | es utilizado por su aplicación. Se ha agregado una configuración predeterminada
    | para cada back-end enviado con Laravel. Usted es libre de agregar más.
    |
    | Controladores: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('SQS_KEY', 'your-public-key'),
            'secret' => env('SQS_SECRET', 'your-secret-key'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'your-queue-name'),
            'region' => env('SQS_REGION', 'us-east-1'),
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => 'default',
            'retry_after' => 90,
            'block_for' => null,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Fallas en trabajos de cola
    | ------------------------------------------------- -------------------------
    |
    | Estas opciones configuran el comportamiento del registro de trabajos en cola fallidos para que
    | puede controlar qué base de datos y tabla se utilizan para almacenar los trabajos que
    | ha fallado. Puede cambiarlos a cualquier base de datos / tabla que desee.
    |
    */

    'failed' => [
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'failed_jobs',
    ],

];
