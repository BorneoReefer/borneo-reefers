const elixir = require('laravel-elixir')

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
const paths = {
  jquery: './node_modules/jquery/',
  bootstrap: './node_modules/bootstrap-sass/assets/',
  fontawesome: './node_modules/font-awesome/'
}

elixir(function (mix) {
  mix.sass('app.scss')
  mix.version('css/app.css')

  // Common JS
  mix.babel([
    'app.js',
    paths.jquery + 'dist/jquery.js',
    paths.bootstrap + 'javascripts/bootstrap.js'
  ], 'public/js/app.js')

  mix.babel(['index.js'], 'public/js/index.js')

  mix.copy(paths.bootstrap + 'fonts/**', 'public/fonts')
  mix.copy(paths.fontawesome + 'fonts/**', 'public/fonts')

  // Live reload
  mix.browserSync({
    proxy: 'localhost:8000'
  })
})
