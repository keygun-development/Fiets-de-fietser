const mix = require('laravel-mix')
require('@tinypixelco/laravel-mix-wp-blocks')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */
mix
  .setPublicPath('./public')
  .browserSync('fdf.dev')

mix
  .sass('assets/css/index.scss', 'styles')
  .options({
        processCssUrls: false,
        postCss: [require('tailwindcss')],
    })

mix
  .sourceMaps()
  .version()
