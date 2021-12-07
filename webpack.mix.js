let mix = require('laravel-mix');
require('mix-tailwindcss');
require('mix-html-builder');

// Disable annoying notification upon file save when mix watch is running
mix.disableSuccessNotifications();

mix
.webpackConfig({
        output: {
            // fix prepend slash (/) in js bundle path in mix-html-builder
            publicPath: './'
        },
})

// Configuration of mix-html-builder
mix.html({
    htmlRoot: './src/*.html', // Your html root file(s)
    output: './', // The html output folder
    partialRoot: './src/partials',    // default partial path
    layoutRoot: './src/layouts',    // default partial path
    inject: true,
    minify: {
        removeComments: false
    }
});

// JavaScript
mix.js(
    [
        'src/js/app.js',
    ],
    'js/app.js'
);

// Minify JS
mix.minify('public/js/app.js');
// mix.minify('public/vendor.js');

// SASS
mix.sass('src/scss/app.scss', 'css/app.css');
mix.sass('src/scss/tailwind.scss', 'css/tailwind.css').tailwind(
    './tailwind.config.js'
);

// Minify CSS (use "npx mix --production instead" to minify all css files)
// mix.minify('public/css/app.css');
// mix.minify('public/css/tailwind.css');

// Copy Fonts
mix.copyDirectory('src/fonts', 'public/fonts');

// Copy Pages
// mix.copyDirectory('src/pages', 'public/pages');

// Setup
mix.extract();
mix.setPublicPath('public/');

// Improve compiling performance
mix.options({
    processCssUrls: false,
});

//browser autorefresh
mix.browserSync({
    proxy: process.env.LOCAL_URL,
    injectChanges: true,
    files: ['public/*.html', 'public/pages/*.html', 'public/js/*.js', 'public/css/*.css'],
});
