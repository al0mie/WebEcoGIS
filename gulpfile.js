var elixir = require('laravel-elixir');
    gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    rename = require("gulp-rename"),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    cleanCSS = require('gulp-clean-css'),
    handlebars = require('gulp-handlebars'),
    wrap = require('gulp-wrap'),
    declare = require('gulp-declare'),
    browserify = require('browserify'),
    source = require('vinyl-source-stream'),
    buffer = require('vinyl-buffer'),
    util = require('gulp-util'),
    del = require('del'),
    concat = require('gulp-concat');

var appNamespace = 'APP';


gulp.task('tmpl', function () {
    return gulp.src('resources/assets/templates/**/*.hbs')
        .pipe(handlebars({
            handlebars: require('handlebars')
        }))
        .pipe(wrap('Handlebars.template(<%= contents %>)'))
        .pipe(declare({
            namespace: appNamespace,
            noRedeclare: true
        }))
        .pipe(concat('templates.js'))
        .pipe(wrap('module.exports = function(Handlebars) { <%= contents %> return this["' + appNamespace + '"];};'))
         .pipe(gulp.dest('resources/assets/js/app'));
});


gulp.task('sass', function () {

});



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
    mix.sass('app.scss');
});
