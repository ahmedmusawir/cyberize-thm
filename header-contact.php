<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="p:domain_verify" content="3833b9f5fb66f58faddede705b2ccac0"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--===========================================
=            CUSTOM ANALYTICS TAGS - HEAD     =
============================================-->

<?php if (get_field('before_ending_head_tag')) : ?>

	<?php the_field('before_ending_head_tag'); ?>

<?php else : ?>

	<?php the_field('before_ending_head_tag_default', 'option'); ?>

<?php endif; ?>	

<!--====  End of CUSTOM ANALYTICS TAGS  ====-->

<?php wp_head(); ?>
</head>

<?php $page_header_image = get_field( 'page_header_image' ); ?>
<?php
    $siteLogo = get_field( 'site_logo_image', 5 ); // 1476 is post id                               
?>	

<body <?php body_class(); ?>>

<!--======================================================
=            CUSTOM ANALYTICS TAGS - BODY TOP            =
=======================================================-->

<?php if (get_field('after_top_body_tag')) : ?>

	<?php the_field('after_top_body_tag'); ?>

<?php else : ?>

	<?php the_field('after_top_body_tag_default', 'option'); ?>

<?php endif; ?>	

<!--====  End of CUSTOM ANALYTICS TAGS - BODY TOP  ====-->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moose-frame' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
	
		<div class="navbar-container">
			<!-- <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> -->
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	
	  		  <div class="container">

			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img id="logo" src="<?php echo $siteLogo; ?>"></a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse navbar-ex1-collapse">

			    	
			        <?php
				        wp_nav_menu( array(
				            'theme_location' => 'primary',
				            'depth' => 2,
				            'container' => false,
				            'menu_class' => 'nav navbar-nav navbar-right',
				            'fallback_cb' => 'wp_page_menu',
				            //Process nav menu using our custom nav walker
				            'walker' => new wp_bootstrap_navwalker())
				        );
			        ?>
			    </div><!-- /.navbar-collapse --> 
	  		  </div><!-- /.container-fluid -->

			</nav> <!-- END NAV BAR -->

				
		</div>


	</header><!-- #masthead -->

	<div id="content" class="site-content">

	



















