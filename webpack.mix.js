const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// ALL
 mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

// homepage
mix.js('resources/js/home.js', 'public/js')
    .sass('resources/sass/home.scss', 'public/css')
    .sourceMaps();

// category
mix.js('resources/js/category.js', 'public/js')
    .sass('resources/sass/category.scss', 'public/css')
    .sourceMaps();

// group
mix.js('resources/js/group.js', 'public/js')
    .sass('resources/sass/group.scss', 'public/css')
    .sourceMaps();

// product
mix.js('resources/js/product.js', 'public/js')
    .sass('resources/sass/product.scss', 'public/css')
    .sourceMaps();

// sale
mix.js('resources/js/sale.js', 'public/js')
.sass('resources/sass/sale.scss', 'public/css')
.sourceMaps();

// helpContact
mix.js('resources/js/helpContact.js', 'public/js')
.sass('resources/sass/helpContact.scss', 'public/css')
.sourceMaps();

// shopList
mix.js('resources/js/shopList.js', 'public/js')
.sass('resources/sass/shopList.scss', 'public/css')
.sourceMaps();
    
// login
mix.js('resources/js/login.js', 'public/js')
.sass('resources/sass/login.scss', 'public/css')
.sourceMaps();

// cart
mix.js('resources/js/cart.js', 'public/js')
.sass('resources/sass/cart.scss', 'public/css')
.sourceMaps();

// account
mix.js('resources/js/account.js', 'public/js')
.sourceMaps();
    
//mix.browserSync('localhost:8000');
