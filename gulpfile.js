var gulp         = require('gulp'), // Подключаем Gulp
	sass         = require('gulp-sass'), //Подключаем Sass пакет,
	browserSync  = require('browser-sync'), // Подключаем Browser Sync
	concat       = require('gulp-concat'), // Подключаем gulp-concat (для конкатенации файлов)
	uglify       = require('gulp-uglifyjs'), // Подключаем gulp-uglifyjs (для сжатия JS)
	cssnano      = require('gulp-cssnano'), // Подключаем пакет для минификации CSS
	rename       = require('gulp-rename'), // Подключаем библиотеку для переименования файлов
	del          = require('del'), // Подключаем библиотеку для удаления файлов и папок
	imagemin     = require('gulp-imagemin'), // Подключаем библиотеку для работы с изображениями
	pngquant     = require('imagemin-pngquant'), // Подключаем библиотеку для работы с png
	cache        = require('gulp-cache'), // Подключаем библиотеку кеширования
	autoprefixer = require('gulp-autoprefixer'),// Подключаем библиотеку для автоматического добавления префиксов
    spritesmith  = require('gulp.spritesmith');

gulp.task('sass', function(){ // Создаем таск Sass
	return gulp.src('app/sass/*.+(scss|sass)') // Берем источник
		.pipe(sass().on('error', sass.logError)) // Преобразуем Sass в CSS посредством gulp-sass
		.pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true })) // Создаем префиксы
		.pipe(gulp.dest('app/css')) // Выгружаем результата в папку app/css
		.pipe(browserSync.reload({stream: true}));// Обновляем CSS на странице при изменении
});

gulp.task('browser-sync', function() { // Создаем таск browser-sync
	browserSync({ // Выполняем browserSync
		proxy: "aqua",
		notify: false // Отключаем уведомления
	});
});

gulp.task('sprite', function () {
	var spriteData = gulp.src('app/img/png_icons/*.png').pipe(spritesmith({
		imgName: '../img/png_sprite/sprite.png',
		cssName: '_sprite.scss',
		imgPath: '../img/png_sprite/sprite.png'
	}));
	return spriteData.pipe(gulp.dest('app/sass'))
		.pipe(browserSync.reload({stream: true}));
});

gulp.task('scripts', function() {
	return gulp.src([ // Берем все необходимые библиотеки
		
		'app/libs/jquery/dist/jquery.min.js', // connect jQuery
		'app/libs/slick-carousel/slick/slick.min.js', // Slick carousel
		'app/libs/tether/dist/js/tether.min.js', // connect popper
		'app/libs/bootstrap/dist/js/bootstrap.min.js',
		'app/libs/masked-input/masked-input.js',
        'app/libs/scrollbar/jquery.mCustomScrollbar.concat.min.js', // Custom scrollbar
		'app/libs/range/jquery-ui.min.js', // ui jQuery
		'app/libs/countdown/compiled/flipclock.js', // counter
		'app/libs/jquery.rateit/scripts/jquery.rateit.js', // rating
        'app/libs/light-gallery/js/lightgallery-all.min.js', // gallery
        'app/libs/jquery-ui-touch-punch-master/jquery.ui.touch-punch.min.js' // drag and drop jQuery UI

		])
		.pipe(concat('libs.min.js')) // Собираем их в кучу в новом файле libs.min.js
		.pipe(uglify()) // Сжимаем JS файл
		.pipe(gulp.dest('app/js')); // Выгружаем в папку app/js
});

gulp.task('css-libs', ['sass'], function() {
	return gulp.src('app/css/libs.css') // Выбираем файл для минификации
		.pipe(cssnano()) // Сжимаем
		.pipe(rename({suffix: '.min'})) // Добавляем суффикс .min
		.pipe(gulp.dest('app/css')); // Выгружаем в папку app/css
});

gulp.task('watch', ['browser-sync', 'css-libs', 'scripts', 'sprite'], function() {
	gulp.watch('app/sass/**/*.+(scss|sass)', ['sass']); // Наблюдение за sass файлами в папке sass
	gulp.watch('app/*.html', browserSync.reload); // Наблюдение за HTML файлами в корне проекта
	gulp.watch('app/**/*.php', browserSync.reload); // Наблюдение за php файлами в корне проекта
	gulp.watch('app/js/**/*.js', browserSync.reload);   // Наблюдение за JS файлами в папке js
	gulp.watch('app/img/png_icons/*.png', ['sprite'], browserSync.reload);   // Наблюдение за png файлами в папке icon
});

gulp.task('clean', function() {
	return del.sync('dist'); // Удаляем папку dist перед сборкой
});

gulp.task('img', function() {
	return gulp.src('app/img/**/*') // Берем все изображения из app
		.pipe(cache(imagemin({  // Сжимаем их с наилучшими настройками с учетом кеширования
			interlaced: true,
			progressive: true,
			svgoPlugins: [{removeViewBox: false}],
			use: [pngquant()]
		})))
		.pipe(gulp.dest('dist/img')); // Выгружаем на продакшен
});

gulp.task('build', ['clean', 'img', 'sass', 'scripts'], function() {

	var buildCss = gulp.src([ // Переносим библиотеки в продакшен
		'app/css/main.css',
		'app/css/libs.min.css'
		])
	.pipe(gulp.dest('dist/css'));

	var buildFonts = gulp.src('app/fonts/**/*') // Переносим шрифты в продакшен
	.pipe(gulp.dest('dist/fonts'));

	var buildParts = gulp.src('app/parts/**/*') // Переносим шрифты в продакшен
	.pipe(gulp.dest('dist/parts'));

	var buildJs = gulp.src('app/js/**/*') // Переносим скрипты в продакшен
	.pipe(gulp.dest('dist/js'));

	var buildHtml = gulp.src('app/*.html') // Переносим HTML в продакшен
	.pipe(gulp.dest('dist'));

	var buildPhp = gulp.src('app/*.php') // Переносим PHP в продакшен
	.pipe(gulp.dest('dist'));

});

gulp.task('clear', function (callback) {
	return cache.clearAll();
});

gulp.task('default', ['watch']);
