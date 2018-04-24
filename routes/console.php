<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Rutas de consola
| ------------------------------------------------- -------------------------
|
| Este archivo es donde puede definir toda su consola basada en Closure
| comandos. Cada cierre está vinculado a una instancia de comando que permite
| enfoque simple para interactuar con los métodos IO de cada comando.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
