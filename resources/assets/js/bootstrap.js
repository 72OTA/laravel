window._ = require("lodash");
window.Popper = require("popper.js").default;

/**
 * Cargaremos jQuery y el complemento Bootstrap jQuery, que brinda asistencia
 * para funciones de Bootstrap basadas en JavaScript, como modales y pestañas. Esta
 * el código puede ser modificado para ajustarse a las necesidades específicas de su aplicación.
 */

try {
  window.$ = window.jQuery = require("jquery");

  require("bootstrap");
} catch (e) {}

/**
 * Cargaremos la biblioteca axios HTTP que nos permite emitir fácilmente solicitudes
 * a nuestro back-end de Laravel. Esta biblioteca se encarga automáticamente de enviar el
 * Símbolo de CSRF como un encabezado basado en el valor de la cookie de token "XSRF".
 */

window.axios = require("axios");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

/**
 * A continuación, registraremos el token CSRF como un encabezado común con Axios para que
 * todas las solicitudes HTTP salientes lo tienen adjunto automáticamente. Esto es simplemente
 * una comodidad simple para que no tengamos que adjuntar todos los tokens de forma manual.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
  window.axios.defaults.headers.common["X-CSRF-TOKEN"] = token.content;
} else {
  console.error(
    "CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token"
  );
}

/**
 * Echo expone una API expresiva para suscribirse a canales y escuchar
 * para eventos transmitidos por Laravel. Transmisión de eco y eventos
 * le permite a su equipo crear fácilmente aplicaciones web robustas en tiempo real.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
