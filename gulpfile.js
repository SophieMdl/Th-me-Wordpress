/**************/
/** GULP VAR **/
/**************/

// BASE
var gulp = require('gulp');

// CSS
var gutil = require('gulp-util');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var compass = require('gulp-compass');
var autoprefixer = require('gulp-autoprefixer');
var csso = require('gulp-csso');

// JS
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

// CSS
gulp.task('css', function() {
    gulp.src('sass/*.scss')
        .pipe(plumber())
        .pipe(compass({
            css: 'css/',
            sass: 'sass/',
            image: 'images',
            style: 'compressed'
        }))
        .pipe(autoprefixer('last 10 versions'))
        .pipe(gulp.env.production ? csso() : gutil.noop())
        .pipe(rename({ dirname: '' }))
        .pipe(gulp.dest('css/'));
});

// JS
gulp.task('js', function() {
    return gulp.src(['/!**!/!*.js'])
        .pipe(concat('main.min.js'))
        .pipe(gulp.dest('javascript/'))
        .pipe(rename('global.min.js'))
        .pipe(uglify({ output: { ascii_only: true } }))
        .pipe(gulp.dest('javascript/'));
});

// WATCHER
gulp.task('dev', ['css', 'js'], function() {
    gulp.watch('sass/*.scss', ['css']);
    gulp.watch('javascript/*.js', ['js']);
});