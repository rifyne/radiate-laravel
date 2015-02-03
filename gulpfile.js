var gulp         = require('gulp');
var jshint       = require('gulp-jshint');
var jscs         = require('gulp-jscs');
var util         = require('gulp-util');
var echo         = require('gulp-print');
var gulpif       = require('gulp-if');
var argv         = require('yargs').argv;
var sass         = require('gulp-sass');
var uglify       = require('gulp-uglify');
var concat       = require('gulp-concat');
var rename       = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var browserSync  = require('browser-sync');
var reload       = browserSync.reload;

//  What is the url your site is served from?
//  we'll use this with BrowswerSync
var proxy_url = 'radiate.dev';

// browser-sync task for starting the server.
gulp.task('serve', function() {
    startBrowserSync();
});

gulp.task('bs-reload', function () {
    browserSync.reload();
});

// code quality check with verbose option
// run with command: `gulp vet` or `gulp vet --verbose`
gulp.task('vet', function() {
    log('Running JavaScript through JSHINT and JSCS');

    return gulp
        .src(['./app/assets/scripts/**/*.js'])
        .pipe(gulpif(argv.verbose, echo()))
        .pipe(jscs())
        .pipe(jshint())
        .pipe(jshint.reporter('jshint-stylish', {verbose: true}))
        .pipe(jshint.reporter('fail'));
});

gulp.task('scripts', function () {
    gulp.src('app/assets/scripts/*.js')
        .pipe(uglify())
        .pipe(concat('main.js'))
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

gulp.task('watch', ['styles', 'scripts'], function() {
    gulp.watch('app/assets/styles/**/*.scss', ['styles']);
    gulp.watch('app/assets/scripts/*.js', ['scripts']);
    gulp.watch('app/views/**/*', ['bs-reload']);
});

gulp.task('default', ['watch', 'serve']);

// Funtions to support the above gulp api

function swallowError (error) {
    console.log(error.toString());
    this.emit('end');
}

function log(msg) {
    if (typeof(msg) === 'object') {
        for (var item in msg) {
            if (msg.hasOwnProperty(item)) {
                util.log(util.colors.blue(msg[item]));
            }
        }
    } else {
        util.log(util.colors.blue(msg));
    }
}

function startBrowserSync() {
    if (browserSync.active) {
        return;
    }

    log('Starting BrowerSync on port');

    var options = {
        proxy: proxy_url,
        ghostMode: {
            clicks: true,
            forms: true,
            scroll: true,
            location: false
        },
        injectChanges: true,
        logFileChanges: true,
        logLevel: 'debug',
        logPrefix: 'gulp-radiate',
        notify: false,
        reloadDelay: 500
    };

    browserSync(options);
}
