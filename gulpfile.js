let gulp = require('gulp');
let cleanCSS = require('gulp-clean-css');



gulp.task('default', function() {
// We use `gulp.watch` for Gulp to expect changes in the files to run again
  gulp.watch('./css/*.css', function(evt) {
  gulp.task('minify-css');
  });
});


gulp.task('minify-css', () => {
     // Folder with files to minify
     return gulp.src('css/mycss.css')
     //The method pipe() allow you to chain multiple tasks together
     //I execute the task to minify the files
    .pipe(cleanCSS())
    //where minified file will be stored
    .pipe(gulp.dest('dist'));
});



