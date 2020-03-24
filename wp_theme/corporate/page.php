<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Glut
 */

get_header();
?>

<div id="content" class="site-content pt-4 pt-md-2">
	<div class="p-pageTitle container-fluid">
	<div class="container-md px-0">
	<h2 class="p-pageTitle__title">
		<?php the_title() ;?>
	</h2>
	<?php if(get_field('page_subtitle')){ ?>
		<p class="p-pageTitle__subTitle">
			<?php the_field('page_subtitle'); ?>
		</p>
	<?php } ?>
	</div>
</div>

	<div class="container-md px-md-0 mb-2">
		<div class="row justify-content-md-center">
			<div class="p-md-0 no-sidebar col-md-10 mt-md-n5 row justify-content-md-center mx-0" style="background-color:#fff;">
				<div class="col-md-10 px-0 pt-md-4 pb-md-5">
					<div style="margin-left:-10px;">
						<?php breadcrumb(); ?>
					</div>
					<div id="primary" class="content-area">
						<main id="main" class="site-main px-0">
							<article id="post-<?php the_ID(); ?>" <?php post_class('p-entryContent'); ?>>
								<?php if ( have_posts() ) : ?>
									<?php while( have_posts() ) : the_post(); ?>
								<div class="page-content">
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
			</div>
		</div>
	</div>

</div><!-- #content -->

<?php
get_footer();
