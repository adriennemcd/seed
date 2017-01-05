var gulp = require('gulp'),
    sass = require('gulp-sass'),
    globbing = require('gulp-css-globbing'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    browserSync = require('browser-sync').create(),
    reload = browserSync.reload;


// CSS to SASS =====================================================================

gulp.task('sass', function () {
  return gulp.src('./src/sass/style.scss')
    .pipe(globbing({
        extensions: ['.scss']
    }))
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream())
});
gulp.task('watch:sass', function() { gulp.watch('src/sass/**/*.scss', gulp.series('sass')); });


// Browsersync ===========================================================

gulp.task('browser-sync', function() {
  browserSync.init({
    files: ['./**/*.php'],
    proxy: 'http://localhost/seed/',
  });
  gulp.task('watch', gulp.parallel('watch:sass', ['sass', reload]));
  // gulp.watch('./js/*.js', ['js', reload]);
  // gulp.watch('images/src/*', ['images', reload]);
});


// Putting it altogether! ===========================================================

gulp.task('watch', gulp.parallel('watch:sass', 'browser-sync'));
gulp.task('default', gulp.series('sass', 'watch'));



