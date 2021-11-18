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

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

mix.js('resources/js/fancybox.umd.js', 'public/js')
    .js('resources/js/sb-admin-2.min.js', 'public/js')
    .js('resources/js/paginas.js', 'public/js')
    .js('resources/js/jquery.easing.min.js', 'public/js')
    .js('resources/js/jquery.min.js', 'public/js')
    .js('resources/js/script.js', 'public/js')
    .js('resources/js/jquery.stellar.min.js', 'public/js')
    .js('resources/js/parallax.js', 'public/js')
    .js('resources/js/jquery-2.0.2.min.js', 'public/js')    
    .sass('resources/sass/main.scss', 'public/css')
    .sass('resources/sass/fancybox.scss', 'public/css');
    mix.copyDirectory('resources/img', 'public/img');
