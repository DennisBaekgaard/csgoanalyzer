
 var elixir = require('laravel-elixir');
 
var bowerDir = './resources/assets/vendor/';
 
var sassPaths = [
    bowerDir + "bootstrap-sass-official/assets/stylesheets/",
    bowerDir + "font-awesome/scss",
    bowerDir + "bootstrap-select-sass/sass"
];
 
elixir(function(mix) {
    mix.sass('app.scss', 'public/css', { paths: sassPaths })
        .scripts([
            'jquery/dist/jquery.min.js',
            'bootstrap-sass-official/assets/javascripts/bootstrap.min.js',
            'bootstrap-select-sass/dist/js/bootstrap-select.min.js'
            ], 'public/js/vendor.js', bowerDir)
        .copy('resources/assets/js/app.js', 'public/js/app.js')
        .copy(bowerDir + 'font-awesome/fonts', 'public/fonts');
 
});

