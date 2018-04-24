<?php

return [

    /*
    |--------------------------------------------------------------------------
    |Disco del sistema de archivos predeterminado
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede especificar el disco del sistema de archivos predeterminado que se debe usar
    | por el marco. El disco "local", así como una variedad de nubes
    | discos basados ​​están disponibles para su aplicación. ¡Solo almacena!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Disco predeterminado del sistema de archivos de la nube
    | ------------------------------------------------- -------------------------
    |
    | Muchas aplicaciones almacenan archivos tanto localmente como en la nube. Para esto
    | Por lo tanto, puede especificar un controlador predeterminado de "nube" aquí. Este controlador
    | se vinculará como la implementación del disco de la nube en el contenedor.
    |*/

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Discos del sistema de archivos
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede configurar tantos "discos" del sistema de archivos como desee, y
    | incluso puede configurar múltiples discos del mismo controlador. Los valores predeterminados tienen
    | ha sido configurado para cada controlador como un ejemplo de las opciones requeridas.
    |
    | Controladores compatibles: "local", "ftp", "sftp", "s3", "rackspace"|
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
        ],

    ],

];
