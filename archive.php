<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Glut
 */

 get_header();

 $args = array(
 		'post_type' => 'post',
		'paged' => $paged,
 		'posts_per_page' => get_option('posts_per_page'), //表示する件数
	);
	
		
	if(is_category()):
		$categories = get_the_category();
		$args += array('cat' => $categories[0]->term_id);
    // $archive_title = single_cat_title('', false).'の記事';
    // $archive_description = category_description();
	elseif(is_tag()):
		$tag_id = get_query_var('tag_id');
		$args += array('tag_id' => $tag_id);
    // $archive_title = single_cat_title('', false).'の記事';
    // $archive_description = tag_description();
  elseif(is_year()):
    // $archive_title = get_the_time("Y年").'の記事';
  elseif(is_month()):
    // $archive_title = get_the_time("Y年m月").'の記事';
  elseif(is_day()):
    // $archive_title = get_the_time("Y年m月d日").'の記事';
  elseif(is_author()):
    // $author_id = get_query_var('author');
    // $author_name = get_the_author_meta( 'display_name', $author_id );
    // $archive_title = $author_name.'が投稿した記事一覧';
  endif;

 ?>
 <div id="content" class="site-content" style="background-color:#fff;">
 	<div class="p-archiveTitle container-fluid">
 	<div class="container-md px-0">
 	<h2 class="p-archiveTitle__title">
 		GLUT BLOG
 	</h2>
 	<div class="p-archiveTitle__breadcrumb">
 		<?php breadcrumb(); ?>
 	</div>
  <?php $wp_query = new WP_Query($args);
	$post_img = $wp_query->posts;
	?>
	<div class="p-archiveTitle__img" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post_img[0]->ID, 'large' ); ?>);">
	</div>
	<?php wp_reset_query(); ?>
 	</div>
 </div>
 <div class="p-sectionTitle mb-2 mb-md-5">
 	<div class="container px-0">
 		<div class="row m-0 align-items-center justify-content-md-between">
 			<div class="col-4">
 				<p class="p-sectionTitle__text">記事一覧</p>
        <!-- <?php echo get_the_category()[0]->cat_name; ?> -->
 			</div>
 			<div class="col-8 col-md-5">
 				<div class="p-sectionTitle__input">
 					<form  role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" method="get"><input type="text" name="s" id="s" placeholder="キーワード検索"><button type="submit"><i class="fas fa-search"></i></form>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>

 <div class="container p-md-0">
 <div id="primary" class="content-area pr-md-5">
 	<main id="main" class="site-main">
 		<div class="p-articleList">
 			<ul>
				<?php
				
        $wp_query = new WP_Query($args);

				// ループ
 				if ( $wp_query->have_posts() ) {
 				    while ( $wp_query->have_posts() ) {
								$wp_query->the_post();

 								$category = get_the_category();

 								$author = get_userdata($post->post_author);
 								$user_id      = $author->ID ;
 								$avatar_img  = scrapeImage( get_wp_user_avatar( $user_id ) );


 				        // 処理を記述
 								?>
 								<li class="p-articleList__item">
 									<div class="c-listWithThumbnail">
 										<div class="c-listWithThumbnail__sub">
 											<a href="<?php the_permalink( $post ); ?>"><img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" alt=""></a>
 										</div>
 										<div class="c-listWithThumbnail__main">
 											<span class="c-listWithThumbnail__date">
 												<?php the_date('Y.m.d'); ?>
 											</span>
 											<h3 class="c-listWithThumbnail__title">
 												<a href="<?php the_permalink( $post ); ?>"><?php the_title(); ?></a>
 											</h3>
 											<a class="c-listWithThumbnail__category" href="<?php echo get_category_link( $category[0]->term_id ); ?>">
 												<?php echo $category[0]->cat_name; ?>
 											</a>
 											<span class="c-listWithThumbnail__author" style="background-image: url(<?php echo $avatar_img; ?>);"></span>
 										</div>
 									</div>
 								</li>
 								<?php
 				    }
 				}

 				?>
 			</ul>

 					<?php
 					if (function_exists("pagination")) {
 			        pagination($my_query->max_num_pages);
 			    };
 					?>
 			<?php
 				// 投稿データのリセット
 				wp_reset_query();
 			?>
 		</div>
 	</main>
 </div>
 <aside id="secondary" class="widget-area pl-md-2">
 <?php get_sidebar(); ?>
 </aside>

 </div>

 </div><!-- #content -->

 <?php
 get_footer();
