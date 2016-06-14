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
    mix.sass(['header.scss','footer.scss','app.scss'],'public/assets/css/app.css');
    mix.sass(['main.scss'],'public/assets/css/main.css');
    mix.sass(['profile.scss'],'public/assets/css/profile.css');
    mix.sass(['register.scss'],'public/assets/css/register.css');
    mix.version(['public/assets/css/app.css','public/assets/css/main.css','public/assets/css/register.css','public/assets/css/profile.css']);
});
