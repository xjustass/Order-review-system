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
    .postCss('resources/css/custom.css', 'public/css', [
        require("tailwindcss"),

        //
    ])
    .browserSync({
        host: '127.0.0.1:8000',
        proxy: 'localhost:8000',
        port: '8000',
        open: false,
        files: [
            'app/**/*.php',
            'resources/views/**/*.php',
            'packages/mixdinternet/frontend/src/**/*.php',
            'public/js/**/*.js',
            'public/css/**/*.css'
        ],
        watchOptions: {
            usePolling: true,
            interval: 500
        }
    });


