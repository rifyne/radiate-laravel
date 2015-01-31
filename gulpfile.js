var gulp         = require('gulp');
var sass         = require('gulp-sass');
var gutil        = require('gulp-util');
var uglify       = require('gulp-uglify');
var concat       = require('gulp-concat');
var rename       = require("gulp-rename");
var autoprefixer = require('gulp-autoprefixer');
var browserSync  = require('browser-sync');
var reload       = browserSync.reload;

// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    browserSync({
        proxy: "radiate.dev",
        notify: false
    });
});

gulp.task('bs-reload', function () {
    browserSync.reload();
});

gulp.task('js', function () {
    gulp.src('app/assets/scripts/*.js')
        .pipe(uglify())
        .pipe(concat('app/assets/js/app.js'))
        .pipe(gulp.dest('public/assets/js'));
});

gulp.task('styles', function() {
    gulp.src('app/assets/styles/main.scss')
        .pipe(sass())
        .on('error', swallowError)
        .pipe(autoprefixer('last 10 version'))
        .pipe(rename({basename: 'main'}))
        .pipe(gulp.dest('public/assets/css'))
        .pipe(reload({stream:true}));
});

gulp.task('watch', ['styles', 'js'], function(){
    gulp.watch('app/assets/styles/**/*.scss', ['styles']);
    gulp.watch('app/assets/scripts/*.js', ['js']);
    gulp.watch("app/views/**/*", ['bs-reload']);
});

gulp.task('default', ['watch', 'browser-sync']);

function swallowError (error) {
    console.log(error.toString());
    this.emit('end');
}

