//plug-in
var gulp = require("gulp");
// SASSファイルの読み込みに使用
var sass = require("gulp-sass");
// CSSの順番変更にに使用
var csscomb = require("gulp-csscomb");
// コンパイルに結果報告に使用
var notify = require("gulp-notify");
// 自動的にベンダープレフィックスの付与
var autoprefixer = require("gulp-autoprefixer");
// 自動的にブラウザ更新
var browsersync = require("browser-sync").create();
// soucemap生成
var sourcemaps = require('gulp-sourcemaps');

// サーバーを立ち上げる
gulp.task('build-server', function (done) {
    browsersync.init({
        server: {
            baseDir: "./"
        }
    });
    done();
    console.log('Server was launched');
});

// ブラウザのリロード
gulp.task('browser-reload', function (done){
    browsersync.reload();
    done();
    console.log('Browser reload completed');
});

gulp.task("sass", function(done) {
	gulp.src("./sass/**/*.scss")
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(csscomb())
        .pipe(sourcemaps.write({includeContent: false}))
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(autoprefixer({
        	browsers: ['last 2 versions']
				}))
        .pipe(sourcemaps.write('./'))
				.pipe(gulp.dest("./"))
        .pipe(notify('sassコンパイル完了'))
				done();
});

// 監視ファイル
gulp.task('watch-files', function(done) {
    gulp.watch("./sass/**/*.scss", gulp.task('sass'));
		gulp.watch("./sass/**/*.scss", gulp.task('browser-reload'));
    gulp.watch("./**/*.html", gulp.task('browser-reload'));
    done();
    console.log(('gulp watch started'));
});

// タスクの実行
gulp.task('default', gulp.series('build-server', 'watch-files', function(done){
    done();
    console.log('Default all task done!');
}));
