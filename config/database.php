<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Nombre de conexión de base de datos predeterminado
    |--------------------------------------------------------------------------
    |
    | Aquí puede especificar cuál de las conexiones de la base de datos a continuación desea
    | para usar como su conexión predeterminada para todo el trabajo de la base de datos. Por supuesto
    | puede usar muchas conexiones a la vez usando la biblioteca de la base de datos.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Conexiones de base de datos
    |--------------------------------------------------------------------------
    |
    | Aquí están cada una de las conexiones de base de datos configuradas para su aplicación.
    | Por supuesto, ejemplos de configuración de cada plataforma de base de datos que es
    | respaldado por Laravel se muestra a continuación para simplificar el desarrollo.
    |
    |
    | Todo el trabajo de la base de datos en Laravel se realiza a través de las instalaciones de PHP DOP
    | así que asegúrese de tener el controlador para su base de datos particular de
    | elección instalada en su máquina antes de comenzar el desarrollo.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Tabla de repositorio de migración
    | ------------------------------------------------- -------------------------
    |
    | Esta tabla realiza un seguimiento de todas las migraciones que ya se han ejecutado para
    | su aplicación. Usando esta información, podemos determinar cuál de
    | las migraciones en el disco no se han ejecutado realmente en la base de datos.|
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Bases de datos Redis
    | ------------------------------------------------- -------------------------
    |
    | Redis es un almacenamiento de valor-clave de código abierto, rápida y avanzada que también
    | proporciona un conjunto de comandos más completo que un sistema de valores-clave típico
    | como APC o Memcached. Laravel hace que sea fácil cavar directamente.
    |
    */

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
