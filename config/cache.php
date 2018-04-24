<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Almacenamiento de caché predeterminado
    |--------------------------------------------------------------------------
    |
    | Esta opción controla la conexión de caché predeterminada que se usa mientras
    | usando esta biblioteca de almacenamiento en caché. Esta conexión se usa cuando otro es
    | no explícitamente especificado cuando se ejecuta una función de almacenamiento en caché determinada.
    |
    | Compatible: "apc", "array", "database", "file", "memcached", "redis"
    |
    */

    'default' => env('CACHE_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Tiendas de caché
    |--------------------------------------------------------------------------
    |
    | Aquí puede definir todas las "tiendas" de caché para su aplicación como
    | así como sus conductores. Incluso puede definir tiendas múltiples para el
    | mismo controlador de caché para agrupar los tipos de elementos almacenados en sus cachés.
    |
    */

    'stores' => [

        'apc' => [
            'driver' => 'apc',
        ],

        'array' => [
            'driver' => 'array',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'cache',
            'connection' => null,
        ],

        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache/data'),
        ],

        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'sasl' => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ],
            'options' => [
                // Memcached::OPT_CONNECT_TIMEOUT  => 2000,
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Prefijo de clave de caché
    |--------------------------------------------------------------------------
    |
    | Cuando se utiliza una tienda basada en RAM como APC o Memcached, podría haber
    | Otras aplicaciones que utilizan el mismo caché. Entonces, especificaremos un
    | valor para obtener el prefijo de todas nuestras claves para que podamos evitar las colisiones.
    |
    */

    'prefix' => env(
        'CACHE_PREFIX',
        str_slug(env('APP_NAME', 'laravel'), '_').'_cache'
    ),

];
