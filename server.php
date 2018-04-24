<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Este archivo nos permite emular la funcionalidad "mod_rewrite" de Apache desde
// servidor web PHP incorporado. Esto proporciona una forma conveniente de probar un Laravel
// aplicación sin haber instalado un software de servidor web "real" aquí.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
