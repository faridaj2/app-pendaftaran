// webpack.mix.js

let mix = require('laravel-mix');
require('mix-tailwindcss');

mix.postCss('src/app.css', 'public/css')
    .tailwind();
mix.browserSync('127.0.0.1:8000');