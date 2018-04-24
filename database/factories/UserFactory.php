<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Modelo Fábricas
| ------------------------------------------------- -------------------------
|
| Este directorio debe contener cada una de las definiciones de fábrica del modelo para
| su aplicación. Las fábricas proporcionan una forma conveniente de generar nuevos
| instancias modelo para probar / sembrar la base de datos de su aplicación.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
