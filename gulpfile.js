var gulp = require('gulp'),
plumber = require('gulp-plumber'),
rename = require('gulp-rename'),
autoprefixer = require('autoprefixer'),
concat = require('gulp-concat'),
uglify = require('gulp-uglify'),
imagemin = require('gulp-imagemin'),
cache = require('gulp-cache'),
minifycss = require('gulp-minify-css'),
sass = require('gulp-sass'),
postcss = require('gulp-postcss'),
jshint = require('gulp-jshint'),
del = require('del'),
runSequence = require('run-sequence'),
modernizr = require('gulp-modernizr'),
bower = require('gulp-bower');

// Add custom modernizr file
gulp.task('modernizr', function() {
	gulp.src('source/js/*.js')
	.pipe(modernizr('modernizr-custom.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js/'))
});

// Clean Dist Folder
gulp.task('clean', function() {
	return del.sync('dist');
})

// Process images
gulp.task('images', function(){
	gulp.src('source/img/**/*')
	.pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
});

// Process sass to css
gulp.task('css', function(){
	gulp.src(['source/sass/**/*.scss'])
	.pipe(plumber({
		errorHandler: function (error) {
			console.log(error.message);
			this.emit('end');
		}}))
	.pipe(sass())
	.pipe(postcss([ autoprefixer() ]))
	.pipe(gulp.dest('dist/css/'))
	.pipe(rename({suffix: '.min'}))
	.pipe(minifycss())
	.pipe(gulp.dest('dist/css/'))
});

// Process javascripts
gulp.task('scripts', function(){
	return gulp.src('source/js/**/*.js')
	.pipe(plumber({
		errorHandler: function (error) {
			console.log(error.message);
			this.emit('end');
		}}))
	.pipe(jshint())
	.pipe(jshint.reporter('default'))
	.pipe(gulp.dest('dist/js/'))
	.pipe(concat('main.js'))
	.pipe(gulp.dest('dist/js/compiled/'))
	.pipe(rename({suffix: '.min'}))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js/compiled/'))
});

// Watch all files for Browser Sync
gulp.task('default', function(){
	gulp.watch("source/sass/**/*.scss", ['css']);
	gulp.watch("source/js/**/*.js", ['scripts', 'modernizr']);
});

// Build bower via NPM (to run in Build function)
gulp.task('bower', function() {
	return bower();
});

// Build task - Cleans, processes sass and then processes scripts and images
gulp.task('build', function(callback) {
	runSequence(
    'clean', // Deleted all public files
    'bower', // Makes sure all bower components are installed
    'css', // SASS to CSS, Autoprefixr. Saves regular and minified
    'modernizr', // Creates custom modernizr file
    ['scripts', 'images'], // Runs JSHint, Concatenate & Minify. Saves regular and minified. Optimizes Images.
    callback
    )
})



