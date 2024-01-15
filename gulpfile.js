const gulp = require('gulp'),
    path = require('path'),
    sass = require("gulp-sass")(require('sass')),
    del = require('del'),
    browserSync = require('browser-sync').create(),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'),
    minify = require('gulp-minify'),
    cleanCSS = require('gulp-clean-css');
    imagemin = require('gulp-imagemin');

// Lazy Loading Library
var lazy_load_script = ['./node_modules/lazyload/lazyload.min.js'];    

// Bootstrap Javascript
var bootstrap_scripts = [
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
];

//AOS
var aos_scripts = ['./node_modules/aos/dist/aos.js'];

// Slick Slider
var slick_carousel_scripts = ['./node_modules/slick-carousel/slick/slick.min.js'];

// var src = './app/assets';
var public = './app/assets';
var sources = {
    styles: `./scss/**/*`,
    images: `./images/**/*`,
    custom_scripts: `./scripts/**/*`,
    vendor_scripts: [].concat.apply([], [
        bootstrap_scripts,
        slick_carousel_scripts,
        //aos_scripts,
        lazy_load_script,
    ]),
}
var destinations = {
    styles: `${public}/css/`,
    images: `${public}/images/`,
    scripts: `${public}/js/`,
}

function styles() {
    return gulp.src(sources.styles)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', function (err) {
            console.error(err.message);
            browserSync.notify('<pre style="text-align: left">' + err.message + '</pre>', 10000);
            this.emit('end');
        }))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(cleanCSS())
        .pipe(gulp.dest(destinations.styles))
        .pipe(browserSync.stream({
            match: '**/*.css'
        }))
}

function clean() {
    return del(public + '/**/*', {
        force: true
    })
}

function images() {
    return gulp.src(sources.images)
        //.pipe(cache('images'))
        .pipe(imagemin())
        //.pipe(webp())
        .pipe(gulp.dest(destinations.images))
};

function custom_scripts() {
    return gulp.src(sources.custom_scripts)
        .pipe(sourcemaps.init())
        .pipe(concat('scripts.min.js'))
        .pipe(minify())
        .pipe(gulp.dest(destinations.scripts))
}

function vendor_scripts() {
    return gulp.src(sources.vendor_scripts)
        .pipe(sourcemaps.init())
        .pipe(concat('vendor.min.js'))
        .pipe(sourcemaps.write())
        .pipe(minify())
        .pipe(gulp.dest(destinations.scripts))
}

function slick_assets() {
    return gulp.src('./node_modules/slick-carousel/slick/ajax-loader.gif')
        .pipe(sourcemaps.init())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./app/assets/css/'));
}

function slick_fonts() {
    return gulp.src('./node_modules/slick-carousel/slick/fonts/**/*')
        .pipe(gulp.dest('./app/assets/css/fonts/'));
}

function watch() {
    browserSync.init({
        proxy: encodeURI(`localhost/aiims/landing-pages/${path.resolve(__dirname, './').split(path.sep).pop()}/app`),
        injectChanges: true,
    });
    gulp.watch('./app/**/*.php').on('change', browserSync.reload);
    gulp.watch(sources.styles, styles);
    gulp.watch(sources.custom_scripts, custom_scripts).on('change', browserSync.reload);
    gulp.watch(sources.images, images).on('change', browserSync.reload);
}

exports.watch = gulp.series(
    clean,
    gulp.parallel(
        styles,
        images,
        slick_assets,
        slick_fonts,
        custom_scripts,
        vendor_scripts,
    ),
    watch
)