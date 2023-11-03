const mix = require('laravel-mix');

mix.js('resources/js/bootstrap.min.js', 'public/js')
   .sass('resources/css/bootstrap.min.css', 'public/css');

