const mix = require('laravel-mix');

mix.js([
    'resources/js/app.js',
    'resources/assets/libs/metismenu/metisMenu.min.js',
    'resources/assets/libs/simplebar/simplebar.min.js',
    'resources/assets/libs/node-waves/waves.min.js',
    'resources/assets/js/app.js' ],

        'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css');

    mix.styles([
        './resources/assets/css/app-dark.css',
        './resources/assets/css/app.css',
        './resources/assets/css/bootstrap-dark.css',
        './resources/assets/css/bootstrap.css',
        './resources/assets/css/icons.css'],

        'public/css/styles.css');

mix.browserSync({
    proxy:'http://public.test/'
});


