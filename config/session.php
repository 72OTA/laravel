<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Driver de sesión predeterminado
    | ------------------------------------------------- -------------------------
    |
    | Esta opción controla el "controlador" de sesión predeterminado que se usará en
    | peticiones. Por defecto, usaremos el controlador nativo liviano pero
    | usted puede especificar cualquiera de los otros maravillosos controladores proporcionados aquí.
    |
    | Soportado: "file", "cookie", "database", "apc",
    |            "memcached", "redis", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Vida de la sesión
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede especificar la cantidad de minutos que desea que la sesión
    | para que se le permita permanecer inactivo antes de que caduque. Si los quieres
    | para caducar inmediatamente en el cierre del navegador, configure esa opción.
    |
    */

    'lifetime' => env('SESSION_LIFETIME', 120),

    'expire_on_close' => false,

    /*
    |--------------------------------------------------------------------------
    | Cifrado de sesión
    | ------------------------------------------------- -------------------------
    |
    | Esta opción te permite especificar fácilmente que todos tus datos de sesión
    | debe ser encriptado antes de ser almacenado Se ejecutará todo el cifrado
    | automáticamente por Laravel y puede usar la sesión como normal.
    |
    */

    'encrypt' => false,

    /*
    |--------------------------------------------------------------------------
    | Ubicación del archivo de sesión
    | ------------------------------------------------- -------------------------
    |
    | Al usar el controlador de sesión nativo, necesitamos una ubicación donde la sesión
    | archivos pueden ser almacenados Se ha establecido un valor predeterminado para usted pero diferente
    | la ubicación puede ser especificada. Esto solo es necesario para sesiones de archivos.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
   | Conexión a la base de datos
    | ------------------------------------------------- -------------------------
    |
    | Al usar los controladores de sesión "base de datos" o "redis", puede especificar un
    | conexión que debería usarse para administrar estas sesiones. Esto debería
    | corresponde a una conexión en las opciones de configuración de su base de datos.
    |
    */

    'connection' => null,

    /*
    |--------------------------------------------------------------------------
    | Tabla de tabla de sesión
    | ------------------------------------------------- -------------------------
    |
    | Al usar el controlador de sesión de "base de datos", puede especificar la tabla que
    | debería usar para administrar las sesiones. Por supuesto, un predeterminado sensato es
    | provisto para ti; sin embargo, puede cambiar esto según sea necesario.
    |
    */

    'table' => 'sessions',

    /*
    |--------------------------------------------------------------------------
    | Tienda de caché de sesión
    | ------------------------------------------------- -------------------------
    |
    | Al usar los controladores de sesión "apc" o "memcached", puede especificar un
    | memoria caché que se debe usar para estas sesiones. Este valor debe
    | corresponder con uno de los almacenes de caché configurados de la aplicación.
    |
    */

    'store' => null,

    /*
    |--------------------------------------------------------------------------
    | Lotería de barrido de sesión
    | ------------------------------------------------- -------------------------
    |
    | Algunos controladores de sesión deben barrer manualmente su ubicación de almacenamiento para obtener
    | deshacerse de las sesiones anteriores de almacenamiento. Estas son las posibilidades de que lo haga
    | suceder en una solicitud dada. Por defecto, las probabilidades son 2 de 100.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Nombre de la cookie de sesión
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede cambiar el nombre de la cookie utilizada para identificar una sesión
    | instancia por ID. El nombre especificado aquí se usará cada vez que
    | el marco de trabajo crea una nueva cookie de sesión para cada controlador.
    |
    */

    'cookie' => env(
        'SESSION_COOKIE',
        str_slug(env('APP_NAME', 'laravel'), '_').'_session'
    ),

    /*
    |--------------------------------------------------------------------------
    | Ruta de cookie de sesión
    | ------------------------------------------------- -------------------------
    |
    | La ruta de la cookie de sesión determina la ruta para la cual la cookie
    | ser considerado como disponible. Por lo general, esta será la ruta raíz de
    | su aplicación pero puede cambiar esto cuando sea necesario.
    |
    */

    'path' => '/',

    /*
    |--------------------------------------------------------------------------
    | Dominio de cookies de sesión
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede cambiar el dominio de la cookie utilizada para identificar una sesión
    | en tu aplicación. Esto determinará en qué dominios está la cookie
    | disponible para su aplicación Se ha establecido un valor predeterminado sensato.
    |
    */

    'domain' => env('SESSION_DOMAIN', null),

    /*
    |--------------------------------------------------------------------------
    | Solo HTTPS Cookies
    | ------------------------------------------------- -------------------------
    |
    | Al establecer esta opción en verdadero, las cookies de sesión solo se enviarán de regreso
    | al servidor si el navegador tiene una conexión HTTPS. Esto mantendrá
    | la cookie se enviará a usted si no se puede hacer de forma segura.
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE', false),

    /*
    |--------------------------------------------------------------------------
    | Solo acceso HTTP
    | ------------------------------------------------- -------------------------
    |
    | Establecer este valor en verdadero evitará que JavaScript acceda al
    | el valor de la cookie y la cookie solo estarán accesibles a través de
    | el protocolo HTTP. Usted es libre de modificar esta opción si es necesario.
    |
    */

    'http_only' => true,

    /*
    |--------------------------------------------------------------------------
    | Cookies del mismo sitio
    | ------------------------------------------------- -------------------------
    |
    | Esta opción determina cómo se comportan sus cookies cuando las solicitudes entre sitios
    | tener lugar, y puede usarse para mitigar los ataques de CSRF. Por defecto, nosotros
    | no habilite esto ya que otros servicios de protección CSRF están en su lugar.
    |
    | Compatible: "lax", "strict"
    |
    */

    'same_site' => null,

];
