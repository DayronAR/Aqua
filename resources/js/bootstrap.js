// resources/js/bootstrap.js
// Archivo de arranque para JS de Laravel. Puedes agregar aquí tus imports globales.

// Ejemplo: importar Axios para peticiones HTTP
import axios from 'axios';
window.axios = axios;

// Configuración básica de Axios
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
