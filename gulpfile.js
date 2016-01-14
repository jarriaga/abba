var elixir = require('laravel-elixir');

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

elixir(function(mix) {

    mix.styles(['global-style.css','animate.css'],'public/css/all.css');
    mix.scripts(['app.js'], 'public/js/app.js');
    mix.version(['js/app.js','css/all.css']);
   /* mix.scripts(['lib/angular-route.js'], 'public/js/lib.js'); */
});
