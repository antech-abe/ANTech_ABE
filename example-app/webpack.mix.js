const mix = require('laravel-mix');

mix
.sass('resources/css/app.sass','public/css')
.js('resources/js/app.js','public/js');