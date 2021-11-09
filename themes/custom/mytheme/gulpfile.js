import gulp from 'gulp' ;    
import imagemin from 'gulp-imagemin';
import uglify from 'gulp-uglify';
import concat from 'gulp-concat';
import gulpSass from 'gulp-sass';
import nodeSass from 'node-sass' ; 
const sass = gulpSass(nodeSass);


gulp.task('default', async function(){
	return console.log('gulp is running.......');
});


gulp.task('copyphp', async function(){
	gulp.src('templates/*')
	.pipe(gulp.dest('dist/templates'));
});


gulp.task('imageMin', async function(){
	gulp.src('images/*')
		.pipe(imagemin())
		.pipe(gulp.dest('dist/images'));
 });


 gulp.task('minify', async function(){
 	gulp.src('js/*')
 	.pipe(uglify())
		.pipe(gulp.dest('dist/js'));
 });
 

//  gulp.task('scripts', async function(){
//  	gulp.src('js/*')
//  	.pipe(concat('main.js'))
//  	.pipe(uglify())
// 		.pipe(gulp.dest('dist/js'));
//  });
 
 
 gulp.task('scss', async function(){
 	gulp.src('sass/*.scss')
 	.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest('css'));
 });




 gulp.task('default', gulp.series('copyphp', 'imageMin', 'minify', 'scss')); 

 gulp.task('watch', function(){
    gulp.watch('templates/*',gulp.series('copyphp'));
    gulp.watch('images/*',gulp.series('imageMin'));
    gulp.watch('js/*',gulp.series('minify'));
    // gulp.watch('src/templates/js/*',gulp.series('scripts'));
    gulp.watch('sass/*',gulp.series('scss'));
 });
