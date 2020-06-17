<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Glut
 */

get_header();
?>

<div id="content" class="site-content no-sidebar">
	<div id="primary" class="content-area">
<main id="main" class="site-main">
  <div class="p-mainVisual">
    <p class="p-mainVisual__mainText"><span class="hidetext">JUST MAKE <br class="d-block d-md-none"> THE VALUE</span></p>
    <p class="p-mainVisual__subText"><span class="hidetext">ニーズを100%超える価値を創り提供する<br class="d-block d-md-none">Webクリエイターチーム</span></p>
    <p class="p-mainVisual__logo"><span class="hidetext">-GLUT-<br><span>グラット</span></span></p>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 px-0">
        <a class="c-thumbnailMenu c-thumbnailMenu--service" href="<?php echo get_permalink( 233 ); ?>">
          <div class="c-thumbnailMenu__bgc">
            <p class="c-thumbnailMenu__title c-thumbnailMenu__title--english">OUR SERVICE</p>
            <p class="c-thumbnailMenu__title">一緒に考え抜く、Web制作</p>
            <span class="c-thumbnailMenu__button">
              VIEW
            </span>
          </div>
        </a>
      </div>
      <div class="col-md-6 px-0">
        <a class="c-thumbnailMenu c-thumbnailMenu--design" href="<?php echo get_permalink( 206 ); ?>">
          <div class="c-thumbnailMenu__bgc">
            <p class="c-thumbnailMenu__title c-thumbnailMenu__title--english">STRATEGY</p>
            <p class="c-thumbnailMenu__title">グラットのWeb戦略</p>
            <span class="c-thumbnailMenu__button">
              VIEW
            </span>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="p-topPortfolio container-fluid">
    <div class="row">
      <div class="col-md-6 p-topPortfolio__content">
        <h3 class="p-topPortfolio__title">
          <span>Latest works</span><br>Plage / ネイルサロン
        </h3>
        <p class="p-topPortfolio__text">
          Plageは地域密着型のプライベートな空間を提供しているトータルビューティーサロンです。<br><br>
          リーズナブルでお客様も地元の方によく利用されていることからホームページは親しみやすくして欲しいとのご要望がありました。<br><br>
          メインの色にはお店の名前からイメージしやすい白とお店の雰囲気が伝わるピンクを使用しました。
        </p>
      </div>
      <div class="col-md-6 p-0 p-topPortfolio__img">
        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/portfolio.jpg" alt="plage ネイルサロン">
        <div class="p-topPortfolio__button">
          <!-- <a class="c-button" href="#">
            VIEW WORKS
          </a> -->
        </div>
      </div>
    </div>
  </div>
</main>
</div>

<aside class="p-blogList">
  <div class="p-blogList__title container pl-md-5 mb-3 mb-md-5">
    <div class="row align-items-center justify-content-between">
      <div class="col-8 col-md-10">
        <h2>GLUT BLOG</h2>
      </div>
    </div>
  </div>
  <div class="container-fluid">
  <div class=" p-blogList__wrap">
		<?php
		$args = array(
				'post_type' => 'post',
				'posts_per_page' => 6,
		);
		$category = get_the_category();
		$wp_query = new WP_Query($args);
		// ループ
		if ( $wp_query->have_posts() ) {
				while ( $wp_query->have_posts() ) {
						$wp_query->the_post();
		?>
    <div class="c-blogThumbnailMenu">
      <a href="<?php the_permalink( $post ); ?>">
      <div class="c-blogThumbnailMenu__img" style="background-image:url(<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>)"><!--<span class="c-blogThumbnailMenu__cate"><?php echo $category[0]->cat_name; ?></span>--></div>
      <p class="c-blogThumbnailMenu__text"><?php echo the_title(); ?></p>
      </a>
    </div>
		<?php
			}}
    ?>
  </div>
  </div>
  <div class="row justify-content-center m-0">
    <a class="c-button col-6 col-md-4" href="<?php echo get_permalink( 7 ); ?>">VIEW ALL</a>
  </div>
</aside>

</div><!-- #content -->

<div class="c-bgText mt-3">CONTENTS</div>

<?php

get_footer();
