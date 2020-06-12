<?php

/**
 *
 *
 * @package Glut
 */

get_header();
?>

<div id="content" class="site-content py-0">
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
			<li id="tabWeb" class="p-tabToggle__item active"><i class="fas fa-desktop"></i><span>Web制作</span></li>
			<!-- <li id="tabLP" class="p-tabToggle__item"><i class="far fa-sticky-note"></i><span>LP制作</span></li> -->
		</ul>
		<span class="current"></span>
	</div>
	<div class="container-fluid px-md-0 mb-0">
		<div class="no-sidebar justify-content-md-center">
			<div id="primary" class="content-area">
				<main id="main" class="site-main px-0">
					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
						<div id="tabImg_content" class="p-createContent">
							<h2>
								バナーやSNSなどの画像制作
							</h2>
							<p>CVに繋がるバナーやSNSなどの画像制作をしています。</p>
							<p>広告位置やサイトコンセプトに合った適切な画像を制作することでCVにつながります。</p>
							<br>
							<br class="d-none d-md-block">
							<div class="p-createContent__img"><img src="<?php echo get_template_directory_uri(); ?>/images/banner-image.jpg" alt="バナー制作""></div>
						<br>
						<br class=" d-none d-md-block">
								<!-- <div class="p-createContent__button align-center"><a class="c-button" href="#">WEB制作の詳細を見る<i class="far fa-arrow-alt-circle-right"></i></a></div> -->
							</div>
							<div id="tabWeb_content" class="p-createContent">
								<h2>
									Webサイトで課題を解決
								</h2>
								<p>昨今Webサイトやスマートフォンサイトを活用した戦略的デジタルマーケティングの需要が高まっています。</p>
								<p>弊社では課題解決に繋がるデザインをコンセプトにWebサイトの制作をしています。</p>
								<br>
								<br class="d-none d-md-block">
								<div class="p-createContent__img"><img src="<?php echo get_template_directory_uri(); ?>/images/Web-image.jpg" alt="バナー制作""></div>
						<h3 class=" align-center">GLUTのWeb制作の強み</h3>
									<p>最新のトレンドをおさえつつ、ユーザーファーストの情報設計を心がけて<br>Webサイトの制作をしています。</p>
									<p>カメラマンやWebマーケティングのプロフェッショナルと協業しているため、<br>写真からマーケティングまでをプロフェッショナルに依頼することでクオリティの高い<br>Webサイトを提供します。</p>
									<div class="p-createContent__makeMerit">
										<div class="c-makeMerit">
											<ul class="c-makeMerit__list">
												<li class="c-makeMerit__item">
													<img src="<?php echo get_template_directory_uri(); ?>/images/icon-users-solid.png" alt="プロフェッショナル">
													<p>プロフェッショナル</p>
												</li>
												<li class="c-makeMerit__item">
													<img src="<?php echo get_template_directory_uri(); ?>/images/icon-newspaper-regular.png" alt="最新のトレンド">
													<p>最新のトレンド</p>
												</li>
												<li class="c-makeMerit__item">
													<img src="<?php echo get_template_directory_uri(); ?>/images/icon-code-solid.png" alt="SEO内部調査">
													<p>SEO内部調査</p>
												</li>
												<li class="c-makeMerit__item">
													<img src="<?php echo get_template_directory_uri(); ?>/images/icon-ruler-combined-solid.png" alt="洗練された情報設計">
													<p>洗練された情報設計</p>
												</li>
												<li class="c-makeMerit__item">
													<img src="<?php echo get_template_directory_uri(); ?>/images/icon-draw-polygon-solid.png" alt="一貫して制作">
													<p>一貫して制作</p>
												</li>
											</ul>
											<span class="c-makeMerit__point"></span>
											<span class="c-makeMerit__point"></span>
											<span class="c-makeMerit__point"></span>
											<span class="c-makeMerit__point"></span>
											<span class="c-makeMerit__point"></span>
											<div class="c-makeMerit__line"></div>
										</div>
									</div>
									<div class="p-createContent__boxContent">
										<div class="c-boxContent">
											<h3 class="align-center">WordPressでのCMSも対応</h3>
											<p>経験豊富なエンジニアによるWordPressのテーマ開発が可能で長期運用に対応した拡張性のある開発要望に合わせたゼロからのテーマ開発です。</p>
										</div>
									</div>
									<div style="background-color:#f8f8f8;margin:0 -15px;" class="py-5 px-3 mx-md-0">
										<h3 class="align-center mt-0 mt-md-4">ウェブサイト制作の金額と制作工程</h3>
										<div class="p-createContent__priceInfo">
											<div class="c-priceInfo">
												<div class="c-priceInfo__block">
													<h4>HTML</h4>
													<hr>
													<p>5ページ：40万</p>
													<p>10ページ：60万</p>
												</div>
												<div class="c-priceInfo__block">
													<h4>WordPress</h4>
													<hr>
													<p>5ページ：60万</p>
													<p>10ページ：80万</p>
												</div>
											</div>
										</div>
										<p>
											※要望に合わせたシステム追加で別途料金が発生する可能性があります。<br>
											詳しい見積もりはContactよりお問い合わせ下さい。
										</p>
									</div>
									<div style="background-color:#f8f8f8;margin:0 -15px;" class="pb-4 pb-md-5 px-3 mx-md-0">
										<hr style="max-width:1200px" class="mt-0">
										<div class="p-createContent__flowImage">
											<div class="c-flowImage">
												<ul class="c-flowImage__list">
													<li class="c-flowImage__item">
														<img src="<?php echo get_template_directory_uri(); ?>/images/icon-envelope-regular.png" alt="お問い合わせ">
														<p>お問い合わせ</p>
													</li>
													<li class="c-flowImage__item">
														<img src="<?php echo get_template_directory_uri(); ?>/images/icon-id-card-solid.png" alt="担当者よりご連絡">
														<p>担当者よりご連絡</p>
													</li>
													<li class="c-flowImage__item">
														<img src="<?php echo get_template_directory_uri(); ?>/images/icon-user-friends-solid.png" alt="ヒアリング">
														<p>ヒアリング</p>
													</li>
													<li class="c-flowImage__item">
														<img src="<?php echo get_template_directory_uri(); ?>/images/icon-clipboard-regular.png" alt="ご提案">
														<p>ご提案</p>
													</li>
													<li class="c-flowImage__item">
														<img src="<?php echo get_template_directory_uri(); ?>/images/icon-palette-solid.png" alt="制作開始">
														<p>制作開始</p>
													</li>
													<li class="c-flowImage__item">
														<img src="<?php echo get_template_directory_uri(); ?>/images/icon-hand-holding-heart-solid.png" alt="納品">
														<p>納品</p>
													</li>
												</ul>
												<span class="c-flowImage__point"></span>
												<span class="c-flowImage__point"></span>
												<span class="c-flowImage__point"></span>
												<span class="c-flowImage__point"></span>
												<span class="c-flowImage__point"></span>
												<span class="c-flowImage__point"></span>
												<div class="c-flowImage__line"></div>
												<p class="c-flowImage__description">
													3営業日以内に担当者によりご連絡します。<br>制作期間につきましては納品まで最短で2ヶ月程度頂いてます
												</p>
											</div>
										</div>
										<hr style="max-width:1200px">
									</div>
									<?php get_template_part( 'template-parts/mainCta'); ?>
									<!-- <div class="p-createContent__button align-center"><a class="c-button" href="#">WEB制作の詳細を見る<i class="far fa-arrow-alt-circle-right"></i></a></div> -->
								</div>
								<!-- <div id="tabLP_content" class="p-createContent">
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
					</div> -->
					</article>
				</main>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var currentFunc = function() {
		var offset = $('.p-tabToggle__item.active').offset();
		var innerWidth = $('.p-tabToggle__item.active').innerWidth();
		$('.p-tabToggle .current').css("left", offset.left + 'px');
		$('.p-tabToggle .current').css("width", innerWidth + 'px');
	}
	$(function() {
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
	$('#tabImg').on('click', function() {
		$(this).addClass('active');
		$('#tabWeb').removeClass('active');
		$('#tabLP').removeClass('active');
		$('#tabImg_content').fadeIn("normal");
		$('#tabWeb_content').fadeOut("normal");
		$('#tabLP_content').fadeOut("normal");
		currentFunc();
	});
	$('#tabWeb').on('click', function() {
		$(this).addClass('active');
		$('#tabImg').removeClass('active');
		$('#tabLP').removeClass('active');
		$('#tabImg_content').fadeOut("normal");
		$('#tabWeb_content').fadeIn("normal");
		$('#tabLP_content').fadeOut("normal");
		currentFunc();
	});
	$('#tabLP').on('click', function() {
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
