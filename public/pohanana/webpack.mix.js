const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/main.js', 'public/js')
    .js('resources/js/parallax.js', 'public/js')
    .js('resources/js/jquery-2.0.2.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
    mix.copyDirectory('resources/img', 'public/img');

    mix.sass('resources/sass/main.scss', 'public/css');

    
