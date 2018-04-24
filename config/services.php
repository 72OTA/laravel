<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Servicios de terceros
    | ------------------------------------------------- -------------------------
    |
    | Este archivo es para almacenar las credenciales de servicios de terceros tales
    | como Stripe, Mailgun, SparkPost y otros. Este archivo proporciona una buena
    | ubicación predeterminada para este tipo de información, permitiendo paquetes
    | tener un lugar convencional para encontrar sus diversas credenciales.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
