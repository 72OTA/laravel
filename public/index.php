<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Registre el cargador automático
| ------------------------------------------------- -------------------------
|
| Composer proporciona un cargador de clases conveniente, generado automáticamente para
| nuestra aplicación. ¡Solo necesitamos utilizarlo! Simplemente lo requeriremos
| en el script aquí para que no tengamos que preocuparnos por el manual
| cargando cualquiera de nuestras clases más adelante. Se siente genial para relajarse.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Enciende las luces
| ------------------------------------------------- -------------------------
|
| Necesitamos iluminar el desarrollo de PHP, así que vamos a encender las luces.
| Esto inicia el framework y lo prepara para su uso, luego
| cargaremos esta aplicación para que podamos ejecutarla y enviar
| las respuestas de vuelta al navegador y deleitar a nuestros usuarios.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Ejecuta la aplicación
| ------------------------------------------------- -------------------------
|
| Una vez que tenemos la aplicación, podemos manejar la solicitud entrante
| a través del núcleo, y enviar la respuesta asociada de nuevo a
| el navegador del cliente que les permite disfrutar de la creatividad
| y maravillosa aplicación que hemos preparado para ellos.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
