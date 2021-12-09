require('./bootstrap');
// require('alpine');

/**
* Import and initialize AlpineJS
*/
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// document.addEventListener('DOMContentLoaded', () => {

//     let form = document.getElementById("test-form");

//     form.addEventListener("submit", function(event) {

//         event.preventDefault();
//         let formData = new FormData(form);

//         for (var pair of formData.entries()) {
//             console.log(pair[0]+ ', ' + pair[1]);
//         }

//     });

// });