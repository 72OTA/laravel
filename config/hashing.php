<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Controlador Hash predeterminado
    | ------------------------------------------------- -------------------------
    |
    | Esta opción controla el controlador hash predeterminado que se usará para hash
    | contraseñas para su aplicación. Por defecto, el algoritmo bcrypt es
    | usado; sin embargo, puede modificar esta opción si lo desea.
    |
    | Compatible: "bcrypt", "argon"
    |
    */

    'driver' => 'bcrypt',

    /*
    |--------------------------------------------------------------------------
    | Opciones de Bcrypt
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede especificar las opciones de configuración que se deben usar cuando
    | las contraseñas se procesan usando el algoritmo Bcrypt. Esto te permitirá
    | para controlar la cantidad de tiempo que lleva codificar la contraseña dada.
    |
    */

    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 10),
    ],

    /*
    |--------------------------------------------------------------------------
    | Opciones de Argón
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede especificar las opciones de configuración que se deben usar cuando
    | las contraseñas se procesan usando el algoritmo de Argon. Estos te permitirán
    | para controlar la cantidad de tiempo que lleva codificar la contraseña dada.
    |
    */

    'argon' => [
        'memory' => 1024,
        'threads' => 2,
        'time' => 2,
    ],

];
