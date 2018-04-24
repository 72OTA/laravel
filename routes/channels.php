<?php

/*
|--------------------------------------------------------------------------
| Canales de transmisión
| ------------------------------------------------- -------------------------
|
| Aquí puede registrar todos los canales de transmisión de eventos que su
| aplicación compatible. Las devoluciones de llamada de autorización del canal son
| utilizado para verificar si un usuario autenticado puede escuchar el canal.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
