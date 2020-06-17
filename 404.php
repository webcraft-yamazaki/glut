<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Glut
 */

get_header();
$args = array(
	'post_type' => 'post',
	'paged' => $paged,
	'posts_per_page' => get_option('posts_per_page'), //表示する件数
);
?>



<div id="content" class="site-content pt-0">
	<div class="p-normalLayout container-fluid">
		<div class="container-md px-0">
			<h2 class="p-normalLayout__title">
				404 not found
			</h2>
			<div class="p-normalLayout__breadcrumb">
				<?php breadcrumb(); ?>
			</div>
		</div>
	</div>
　
	<div class="p-sectionTitle mb-2 mb-md-5">
	<div class="container px-0">
		<div class="row m-0 align-items-center justify-content-md-between">
			<div class="col-4">
				<p class="p-sectionTitle__text">その他の記事一覧</p>
			</div>
			<div class="col-8 col-md-5">
				<div class="p-sectionTitle__input">
					<form  role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" method="get"><input type="text" name="s" id="s" placeholder="キーワード検索"><button type="submit"><i class="fas fa-search"></i></form>
				</div>
			</div>
		</div>
	</div>
</div>

	<div class="container-md px-md-0 mb-2">
		<div class="row justify-content-md-center">
			<div id="primary" class="content-area">
				<main id="main" class="site-main px-0">
					<div class="p-articleList">
						<ul>
							<?php

							$wp_query = new WP_Query($args);
							// ループ
							if ($wp_query->have_posts()) {
								while ($wp_query->have_posts()) {
									$wp_query->the_post();

									$category = get_the_category();

									$author = get_userdata($post->post_author);
									$user_id      = $author->ID;
									$avatar_img  = scrapeImage(get_wp_user_avatar($user_id));


									// 処理を記述
							?>
									<li class="p-articleList__item">
										<div class="c-listWithThumbnail">
											<div class="c-listWithThumbnail__sub">
												<a href="<?php the_permalink($post); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt=""></a>
											</div>
											<div class="c-listWithThumbnail__main">
												<span class="c-listWithThumbnail__date">
													<?php the_date('Y.m.d'); ?>
												</span>
												<h3 class="c-listWithThumbnail__title">
													<a href="<?php the_permalink($post); ?>"><?php the_title(); ?></a>
												</h3>
												<a class="c-listWithThumbnail__category" href="<?php echo get_category_link($category[0]->term_id); ?>">
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
		</div>
	</div>
</div>

<?php
get_footer();
