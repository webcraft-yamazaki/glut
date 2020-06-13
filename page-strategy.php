<?php
/**
 *
 *
 * @package Glut
 */

get_header();
 ?>




<div class="p-normalLayout container-fluid">
	<div class="container-md px-0">
		<h2 class="p-normalLayout__title">
			STRATEGY
			<span>GLUTのWeb戦略</span>
		</h2>
		<div class="p-normalLayout__breadcrumb">
			<?php breadcrumb(); ?>
		</div>
	</div>
</div>


<main class="pb-5">
	<section class="test">
		<h2>MAKE THE VALUE</h3>
		<h3>成果を出せる価値あるWeb戦略を届ける</h3>
		<p>
			この想いを念頭にGLUTでは2020年から制作業務をしています。
			弊社では良い物とは3つの観点から定義をしています。
		</p>
	</section>
	
	<section class="test">
		<img class="test__i" src="<?php echo get_template_directory_uri(); ?>/images/strategy01.jpg" alt="">
		<h3 data-tooltip="01">成果に繋がる情報設計と洗練されたUI/UX</h3>
		<p>
			良いユーザーインターフェースを作成する為にお客様が抱えている課題や
			ユーザーが抱えている問題を抽出し、課題を解決するためにリサーチを行い、
			ただデザインするだけではなく理論に基づいた情報設計を行います。
		</p>
	</section>

	<section class="test">
		<img class="test__i" src="<?php echo get_template_directory_uri(); ?>/images/strategy02.jpg" alt="">
		<h3 data-tooltip="02">Googleに準拠したSEOに強いデベロップメント</h3>
		<p>
		Googleガイドラインに沿ったサイト構築をし、SEOに強いサイトをご提供します。
		近年ではモバイルの設計やサイトスピードの最適化をすることで、
		ユーザーの離脱を防ぐサイトを実現します。
		</p>
	</section>
	<section class="test">
		<img class="test__i" src="<?php echo get_template_directory_uri(); ?>/images/strategy03.jpg" alt="">
		<h3 data-tooltip="03">最適なマーケティングで成果を向上させる</h3>
		<p>
		どんなに良い商品でも世の中に認知され、お客様に知って頂く事が重要です。
		マーケティングは商品や企業様に応じたマーケティングが存在します。
		我々はクライアント様にとって最適なマーケティング手法を洗い出しご提案しています。
		</p>
		<div class="test__button">
			<!-- <a class="c-button" href="#">
				実例を見る
				<i class="fas fa-arrow-circle-right"></i>
			</a> -->
		</div>
	</section>

	<div class="mb-5 px-3" style="max-width:800px;margin:auto;">
		<?php get_template_part( 'template-parts/mainCta'); ?>
	</div>

</main>

 <?php
 get_footer();
