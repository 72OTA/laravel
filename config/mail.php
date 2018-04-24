<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Conductor de correo
    | ------------------------------------------------- -------------------------
    |
    | Laravel admite la función "correo" de SMTP y PHP como controladores para
    | envío de correo electrónico Puedes especificar cuál usas en todo
    | tu aplicación aquí. Por defecto, Laravel está configurado para correo SMTP.
    |
    | Soportado: "smtp", "sendmail", "mailgun", "mandrill", "ses",
    |            "sparkpost", "log", "array"
    |
    */

    'driver' => env('MAIL_DRIVER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | Dirección de host SMTP
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede proporcionar la dirección de host del servidor SMTP utilizado por su
    | aplicaciones. Se proporciona una opción predeterminada que es compatible con
    | el servicio de correo Mailgun que proporcionará entregas confiables.
    |
    */

    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),

    /*
    |--------------------------------------------------------------------------
    | Puerto de host SMTP
    | ------------------------------------------------- -------------------------
    |
    | Este es el puerto SMTP utilizado por su aplicación para enviar correos electrónicos a
    | usuarios de la aplicación. Al igual que el anfitrión, hemos establecido este valor para
    | ser compatible con la aplicación de correo electrónico Mailgun por defecto.
    |
    */

    'port' => env('MAIL_PORT', 587),

    /*
    |--------------------------------------------------------------------------
    | Dirección global "Desde"
    | ------------------------------------------------- -------------------------
    |
    | Puede desear que todos los correos electrónicos enviados por su aplicación se envíen desde
    | la misma dirección Aquí, puede especificar un nombre y una dirección que sea
    | utilizado globalmente para todos los correos electrónicos que envía su aplicación.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Protocolo de encriptación de correo electrónico
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede especificar el protocolo de cifrado que se debe usar cuando
    | la aplicación envía mensajes de correo electrónico. Un ajuste sensato usando el
    | El protocolo de seguridad de la capa de transporte debe proporcionar una gran seguridad.
    |
    */

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    /*
    |--------------------------------------------------------------------------
    | Nombre de usuario del servidor SMTP
    | ------------------------------------------------- -------------------------
    |
    | Si su servidor SMTP requiere un nombre de usuario para la autenticación, debe
    | Ponlo aquí. Esto se usará para autenticarse con su servidor en
    | conexión. También puede establecer el valor de "contraseña" debajo de este.
    |
    */

    'username' => env('MAIL_USERNAME'),

    'password' => env('MAIL_PASSWORD'),

    /*
    |--------------------------------------------------------------------------
    | Ruta del sistema Sendmail
    | ------------------------------------------------- -------------------------
    |
    | Cuando utilice el controlador "sendmail" para enviar correos electrónicos, necesitaremos saber
    | el camino hacia donde Sendmail vive en este servidor. Una ruta predeterminada tiene
    | proporcionado aquí, que funcionará bien en la mayoría de sus sistemas.
    |
    */

    'sendmail' => '/usr/sbin/sendmail -bs',

    /*
    |--------------------------------------------------------------------------
    | Configuración de correo de marcado
    | ------------------------------------------------- -------------------------
    |
    | Si está utilizando renderizado de correo electrónico basado en Markdown, puede configurar su
    | rutas de temas y componentes aquí, lo que le permite personalizar el diseño
    | de los correos electrónicos. O bien, puede simplemente quedarse con los valores predeterminados de Laravel!
    |
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
