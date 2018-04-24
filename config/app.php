<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Nombre de la aplicacion
    |--------------------------------------------------------------------------
    |
    | Este valor es el nombre de tu aplicación. Este valor se usa cuando el
    | marco necesita colocar el nombre de la aplicación en una notificación o
    | cualquier otra ubicación según lo requiera la aplicación o sus paquetes.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Ambiente de la aplicacion
    |--------------------------------------------------------------------------
    |
    | Este valor determina el "entorno" en el que se encuentra actualmente su aplicación
    | corriendo. Esto puede determinar cómo prefiere configurar varios
    | servicios que utiliza su aplicación. Establezca esto en su archivo ".env".
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | 
    | Modo de depuración de aplicaciones
    |--------------------------------------------------------------------------
    |
    | Cuando su aplicación está en modo de depuración, los mensajes de error detallados con
    | los rastros de pila se mostrarán en cada error que ocurra dentro de su
    | solicitud. Si está deshabilitado, se muestra una página de error genérico simple.
    |
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | URL de la aplicación
    |--------------------------------------------------------------------------
    |
    | Esta URL es utilizada por la consola para generar URL correctamente al usar
    | la herramienta de línea de comandos de Artisan. Debe establecer esto en la raíz de
    | su aplicación para que se use al ejecutar tareas de Artisan.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Zona horaria de la aplicación
    |--------------------------------------------------------------------------
    |
    | Aquí puede especificar la zona horaria predeterminada para su aplicación, que
    | será utilizado por las funciones de fecha y hora de PHP. Nos hemos ido
    | adelante y configúrelo de manera predeterminada para usted.|
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Configuración regional de la aplicación
    |--------------------------------------------------------------------------
    |
    | La configuración regional de la aplicación determina la configuración regional predeterminada que se usará
    | por el proveedor de servicios de traducción. Usted es libre de establecer este valor
    | a cualquiera de las configuraciones regionales que serán compatibles con la aplicación.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Configuración regional de la aplicación
    |--------------------------------------------------------------------------
    |
    | La configuración regional alternativa determina la configuración regional que se usará cuando la actual
    | no está disponible. Puede cambiar el valor para corresponder a cualquiera de
    | las carpetas de idiomas que se proporcionan a través de su aplicación.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Clave de encriptación
    |--------------------------------------------------------------------------
    |
    | Esta tecla es utilizada por el servicio de cifrado Illuminate y debe establecerse
    | a una cadena aleatoria de 32 caracteres; de lo contrario, estas cadenas cifradas
    | no será seguro. Por favor, haz esto antes de implementar una aplicación.
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Proveedores de servicios automáticos
    |--------------------------------------------------------------------------
    |
    | Los proveedores de servicios enumerados aquí se cargarán automáticamente en el
    | solicite su solicitud Siéntase libre de agregar sus propios servicios a
    | esta matriz para otorgar funcionalidad expandida a sus aplicaciones.
    |
    */

    'providers' => [

        /*
         * Proveedores de servicios de Laravel Framework ...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Proveedores de servicios de paquetes ...
         */

        /*
         * Proveedores de servicios de aplicaciones ...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Alias ​​de clase
    |--------------------------------------------------------------------------
    |
    | Esta matriz de alias de clases se registrará cuando esta aplicación
    | Alla empezado. Sin embargo, siéntase libre de registrar tantas como desee
    | los alias son "flojos" cargados para que no obstaculicen el rendimiento.
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,

    ],

];
