const { src, dest, watch, parallel, series } = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();
const sourcemaps = require('gulp-sourcemaps');

sass.compiler = require('node-sass');

const OPTIONS = {
  templates: {
    src: './**/*.php',
    dist: ''
  },
  css: {
    src: './sass/**/*.scss',
    dist: './'
  },
  server: {
    proxy: "http://elhada3d.local/"
  }
}


function css() {
  return src(OPTIONS.css.src)
    .pipe(sourcemaps.init())
    .pipe(sass({
      outputStyle: 'expanded',
      sourceComments: true
    }).on('error', sass.logError))
    .pipe(sourcemaps.write('./'))
    .pipe(dest(OPTIONS.css.dist))
    .pipe(browserSync.stream());
}

function serve() {
  browserSync.init({
    // Chose just one mode.
    // Proxy Mode
    proxy: OPTIONS.server.proxy,
    // Server Mode
    // server: {
    //   baseDir: OPTIONS.server.baseDir,
    // }
  });
  // see changes on html files and reload
  watch(OPTIONS.templates.src, reload);

  // see changes on sass files and recompile
  watch(OPTIONS.css.src, css);
}

function reload(cb) {
  browserSync.reload();
  cb();
}


exports.css = css;
exports.default = parallel(css, series(serve));
