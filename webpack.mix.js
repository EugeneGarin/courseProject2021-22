const mix = require('laravel-mix');
require('mix-tailwindcss');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js/app.js');


// SASS
mix.sass('resources/scss/app.scss', 'public/css/app.css');
mix.sass('resources/scss/tailwind.scss', 'public/css/tailwind.css').tailwind(
    './tailwind.config.js'
);

mix.copyDirectory('resources/fonts', 'public/fonts');

// Disable annoying notification upon file save when mix watch is running
mix.disableSuccessNotifications();
