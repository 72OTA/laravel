<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Ver rutas de almacenamiento
    | ------------------------------------------------- -------------------------
    |
    | La mayoría de los sistemas de plantillas cargan plantillas desde el disco. Aquí puedes especificar
    | un conjunto de rutas que deberían verificarse para sus vistas. Por supuesto
    | la ruta habitual de vista de Laravel ya se ha registrado para usted.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Ruta de vista compilada
    | ------------------------------------------------- -------------------------
    |
    | Esta opción determina dónde estarán todas las plantillas compiladas de Blade
    | almacenado para su aplicación. Por lo general, esto está dentro del almacenamiento
    | directorio. Sin embargo, como siempre, puedes cambiar este valor.
    |
    */

    'compiled' => realpath(storage_path('framework/views')),

];
