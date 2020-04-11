<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Glut
 */

?>

	<div class="p-siteAuthorProfile">
		<div class="p-siteAuthorProfile__img">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
		</div>
		<p class="p-siteAuthorProfile__text">
			グラットは東京を拠点に活動しているWEB制作チームです。当ブログはWEB制作に関連する情報はもちろんですが、スタッフが持っている趣味などの知識や様々なコンテンツを配信していきます。
		</p>
		<!-- <a class="c-outlineButton" href="#">WEB制作の詳細</a> -->
		<a class="c-outlineButton mb-4" href="<?php echo get_permalink( 18 ); ?>">CONTACT</a>
		<div class="p-siteAuthorProfile__sns">
			<a class="c-snsLink c-snsLink--black c-snsLink--big" href="https://twitter.com/GLUT2020"><i class="fab fa-twitter"></i></a>
		</div>
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
