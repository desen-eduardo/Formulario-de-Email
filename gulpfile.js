const {src, dest, parallel, watch} = require('gulp')
const uglifycss = require('gulp-uglifycss')
const rename = require('gulp-rename')
const babel = require('gulp-babel')
const minifyJs = require('gulp-uglify')

const css = () => {
  return src('src/css/*.css')
        .pipe(uglifycss({
            "maxLineLen":80,
            "uglyComments":true
        }))
        .pipe(rename({
            extname: ".min.css"
        }))
        .pipe(dest('./public/assets/css/')) 
}

const js = () => {
    return src('src/js/*.js')
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(minifyJs())
        .pipe(rename({
            extname: ".min.js"
        }))
        .pipe(dest('./public/assets/js/'))
}

exports.default = function() {
    watch('src/js/*.js',parallel(js))
    watch('src/css/*.css',parallel(css))
}    