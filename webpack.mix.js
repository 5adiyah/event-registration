let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/dist/');
mix.sass('resources/assets/sass/app.scss', 'public/css');
mix.browserSync('localhost:8000');
