<?php

/**
 *
 *
 * @package Glut
 */

get_header();
?>

<div id="content" class="site-content pt-0">
	<div class="p-normalLayout container-fluid px-0 mb-0">
		<div class="container-md px-0">
			<h2 class="p-normalLayout__title">
				<?php the_title(); ?>
				<?php if (get_field('page_subtitle')) { ?>
					<span><?php the_field('page_subtitle'); ?></span>
				<?php } ?>
			</h2>
			<div class="p-normalLayout__breadcrumb">
				<?php breadcrumb(); ?>
			</div>
		</div>
	</div>
	<div class="p-tabToggle container-fluid px-0">
		<ul class="container-md">
			<li id="tabImg" class="p-tabToggle__item"><i class="far fa-images"></i><span>画像制作</span></li>
			<li id="tabWeb" class="p-tabToggle__item active"><i class="fas fa-desktop"></i><span>WEB制作</span></li>
			<li id="tabLP" class="p-tabToggle__item"><i class="far fa-sticky-note"></i><span>LP制作</span></li>
		</ul>
		<span class="current"></span>
	</div>
	<div class="container-md px-md-0 mt-5 mb-2">
		<div class="no-sidebar justify-content-md-center">
			<div id="primary" class="content-area">
				<main id="main" class="site-main px-0">
					<article id="post-<?php the_ID(); ?>" <?php post_class('p-entryContent'); ?>>
					<div id="tabImg_content" class="p-createContent">
						<h2>
						バナーやSNSなどの画像制作
						</h2>
						<p>CVに繋がるバナーやSNSなどの画像制作をしています。</p>
						<p>広告位置やサイトコンセプトに合った適切な画像を制作することでCVにつながります。</p>
						<br>
						<br class="d-none d-md-block">
						<div><img src="<?php echo get_template_directory_uri(); ?>/images/banner-image.jpg" alt="バナー制作""></div>
						<br>
						<br class="d-none d-md-block">
						<div class="p-createContent__button align-center"><a class="c-button" href="#">WEB制作の詳細を見る<i class="far fa-arrow-alt-circle-right"></i></a></div>
					</div>
					<div id="tabWeb_content" class="p-createContent">
						<h2>
						WEBサイトで課題を解決
						</h2>
						<p>昨今WEBサイトやスマートフォンサイトを活用した戦略的デジタルマーケティングの需要が高まっています。</p>
						<p>弊社では課題解決に繋がるデザインをコンセプトにWEBサイトの制作をしています。</p>
						<br>
						<br class="d-none d-md-block">
						<div><img src="<?php echo get_template_directory_uri(); ?>/images/web-image.jpg" alt="バナー制作""></div>
						<br>
						<br class="d-none d-md-block">
						<div class="p-createContent__button align-center"><a class="c-button" href="#">WEB制作の詳細を見る<i class="far fa-arrow-alt-circle-right"></i></a></div>
					</div>
					<div id="tabLP_content" class="p-createContent">
					<h2>
						
						</h2>
						<p></p>
						<p></p>
						<br>
						<br class="d-none d-md-block">
						<div><img src="<?php echo get_template_directory_uri(); ?>/images/.jpg" alt="LP制作""></div>
						<br>
						<br class="d-none d-md-block">
						<div class="p-createContent__button align-center"><a class="c-button" href="#">LP制作の詳細を見る<i class="far fa-arrow-alt-circle-right"></i></a></div>
					</div>
					</article>
				</main>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var currentFunc = function(){
		var offset = $('.p-tabToggle__item.active').offset();
		var innerWidth = $('.p-tabToggle__item.active').innerWidth();
		$('.p-tabToggle .current').css("left",offset.left + 'px');
		$('.p-tabToggle .current').css("width",innerWidth + 'px');
	}
	$(function(){
		currentFunc();
	})
	var timer = false;
	$(window).resize(function() {
		if (timer !== false) {
			clearTimeout(timer);
		}
		timer = setTimeout(function() {
			currentFunc();
		}, 200);
	});
	$('#tabImg').on('click',function(){
		$(this).addClass('active');
		$('#tabWeb').removeClass('active');
		$('#tabLP').removeClass('active');
		$('#tabImg_content').fadeIn("normal");
		$('#tabWeb_content').fadeOut("normal");
		$('#tabLP_content').fadeOut("normal");
		currentFunc();
	});
	$('#tabWeb').on('click',function(){
		$(this).addClass('active');
		$('#tabImg').removeClass('active');
		$('#tabLP').removeClass('active');
		$('#tabImg_content').fadeOut("normal");
		$('#tabWeb_content').fadeIn("normal");
		$('#tabLP_content').fadeOut("normal");
		currentFunc();
	});
	$('#tabLP').on('click',function(){
		$(this).addClass('active');
		$('#tabWeb').removeClass('active');
		$('#tabImg').removeClass('active');
		$('#tabImg_content').fadeOut("normal");
		$('#tabWeb_content').fadeOut("normal");
		$('#tabLP_content').fadeIn("normal");
		currentFunc();
	});
</script>
<?php
get_footer();
