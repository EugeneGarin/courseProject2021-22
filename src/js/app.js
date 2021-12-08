/**
* Import and initialize AlpineJS
*/
import Alpine from 'alpinejs'
window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {

    let form = document.querySelector("form");
    let log = document.querySelector("#log");

    form.addEventListener("submit", function(event) {
    let data = new FormData(form);
    let output = "";
    for (const entry of data) {
        output = output + entry[0] + "=" + entry[1] + "\r";
    };
    log.innerText = output;
    event.preventDefault();
    }, false);

});