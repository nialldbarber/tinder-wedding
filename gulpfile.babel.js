// Plugins
const gulp 			= require('gulp'),
	  sass 			= require('gulp-sass'),
	  autoprefixer 	= require('gulp-autoprefixer'),
      mqSass 		= require('mq-sass'),
      concat 		= require('gulp-concat'),
      uglify 		= require('gulp-uglify'),
      rename 		= require('gulp-rename'),
      imagemin 		= require('gulp-imagemin');

// Theme Directory
const themeDirectory = 'wp-content/themes/starter-theme/',
	  relativeThemeDirectory = './' + themeDirectory;

// Paths
const paths = {
	styles: {
	    src: 'src/styles/**/*.scss',
	    dist: 'dist/styles/'
  	},
  	scripts: {
	    src: 'src/scripts/vendor/**/*.js',
	    dist: 'dist/scripts/vendor/'
  	},
  	img: {
	    src: 'src/img/*',
	    dist: 'dist/img/'
  	}
};

// Styles
gulp.task('styles', () => {
	return  gulp.src(relativeThemeDirectory + paths.styles.src)
			.pipe(sass({        	
				includePaths: ['node_modules/mq-sass/stylesheets'],
				outputStyle: 'compressed'
			}).on('error', sass.logError))
			.pipe(autoprefixer({
				browsers: ['last 6 versions'],
				cascade: false
			}))
			.pipe(gulp.dest(relativeThemeDirectory + paths.styles.dist));
});

// Images
gulp.task('images', () => {
    return gulp.src(relativeThemeDirectory + paths.img.src)
        .pipe(imagemin({
            progressive: true
        }))
        .pipe(gulp.dest(relativeThemeDirectory + paths.img.dist));
});

// Watch Task
gulp.task('watch', () => {
	gulp.watch(relativeThemeDirectory + paths.styles.src, ['styles']);
	gulp.watch(relativeThemeDirectory + paths.img.src, ['images']);
});

gulp.task('default', ['watch']);