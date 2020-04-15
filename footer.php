<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Glut
 */

?>

		<footer id="colophon" class="l-footer container-fluid">
	  	<p class="l-footer__logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">GLUT</a></p>
	  	<div class="l-footer__sns"><a class="c-snsLink" href="https://twitter.com/GLUT2020"><i class="fab fa-twitter"></i></a></div>
	  	<p class="l-footer__copyright">GLUT.inc 2020</p>
		</footer>
		<div id="slideMenuOverlay"></div>
	</div><!-- #page -->
</div><!-- #slideMenuOut -->
<div id="slideMenuIn" class="p-drawerMenu">
  <div class="p-drawerMenu__logo">
    <div class="c-logo">
      <h2 class="my-3">GLUT</h2>
    </div>
  </div>
	<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'container'      => 'ul',
			'depth'          => 1,
		) );
	?>
</div>


<?php wp_footer(); ?>

</body>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<!-- <script src="https://kit.fontawesome.com/f826fffb9d.js" crossorigin="anonymous"></script> -->
</html>
