<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Glut
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="slideMenuOut" class="">
<div id="page" class="site">
	<header id="masthead" class="l-header container-fluid py-2">
		<div class="row justify-content-start justify-content-md-end align-items-center">
	    <div class="c-logo ml-3 mx-md-4">
	      <h1 class="align-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">GLUT</a></h1>
	    </div>
	    <div class="sp-none mx-md-4">
	      <a class="c-contactLink" href="<?php echo get_permalink( 18 ); ?>">
	        CONTACT
	      </a>
	    </div>
	    <div id="slideMenuButton" class="c-slideMenuButton mx-md-4">
	      <div class="c-slideMenuButton__wrap">
	        <span></span>
	        <span></span>
	      </div>
	    </div>
	</header><!-- #masthead -->
