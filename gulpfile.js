gulp = require('gulp');
shell = require('gulp-shell');

gulp.task('php', shell.task([
  'clear',
  'php recursive.php'
]));

gulp.task('watch', function() {
  gulp.watch('recursive.php', ['php']);
});

