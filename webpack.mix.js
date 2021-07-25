let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'js').sass('resources/sass/app.scss', 'css');
mix.js('resources/js/cliente.js', 'js');
mix.js('resources/js/empresa.js', 'js');
