<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Glut
 */

get_header();
$author = get_userdata($post->post_author);
$user_id      = $author->ID ;
$avatar_img  = scrapeImage( get_wp_user_avatar( $user_id ) );
?>

<div id="content" class="site-content">

	<div class="container-md px-md-0 mb-2">
		<div class="row justify-content-md-center">
			<div class="col-md-8 px-0">
			<?php breadcrumb(); ?>
		</div>
		</div>
	</div>

	<div class="container p-md-0 no-sidebar">

		<div id="primary" class="content-area row justify-content-md-center">
			<main id="main" class="site-main col-md-8 px-0">
				<article id="post-<?php the_ID(); ?>" <?php post_class('p-entryContent'); ?>>
					<?php if ( have_posts() ) : ?>
						<?php while( have_posts() ) : the_post(); ?>
							<?php if(get_the_post_thumbnail()): ?>
								<div class="p-entryContent__thumbnail" style="background-image:url(<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>)"></div>
							<?php endif; ?>
					<h2 class="p-entryContent__title">
						<?php the_title(); ?>
					</h2>
					<div class="p-entryContent__category">
						<?php echo get_the_category()[0]->cat_name; ?>
					</div>
					<div class="p-entryContent__author">
						<div class="p-entryContent__author__img" style="background-image: url(<?php echo $avatar_img; ?>);"></div>
						<div class="p-entryContent__author__name"><?php echo $author->display_name;?></div>
						<div class="p-entryContent__author__tag"><?php the_author_meta('user_description',$user_id); ?></div>
					</div>

					<div class="entry-content">
						<?php
						the_content();
						?>
					</div><!-- .entry-content -->
					<?php endwhile;?>
				<?php endif; ?>
				</article>
			</main>
		</div>

	</div>

</div><!-- #content -->

<?php
get_footer();
