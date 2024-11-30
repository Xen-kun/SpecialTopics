const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/css/main.scss', 'public/css');
