/**
 * Primero cargaremos todas las dependencias de JavaScript de este proyecto que
 * incluye Vue y otras bibliotecas. Es un gran punto de partida cuando
 * crear aplicaciones web robustas y potentes usando Vue y Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

/**
 * A continuación, crearemos una nueva instancia de aplicación Vue y la asociaremos a
 * la página. Entonces, puede comenzar a agregar componentes a esta aplicación
 * o personalice el andamio JavaScript para que se ajuste a sus necesidades únicas.
 */

Vue.component(
  "example-component",
  require("./components/ExampleComponent.vue")
);

const app = new Vue({
  el: "#app"
});
