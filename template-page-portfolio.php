<?php
/**
 * The template for displaying Contact Page.
 *
 * Template Name: Portfolio Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header('contact'); ?>


<style type="text/css">

	#hero-portfolio {

		height: 80vh;

		background: url("/wp-content/uploads/2018/02/hero-img-1920x800.jpg") no-repeat center center fixed;

		  -webkit-background-size: cover;

		  -moz-background-size: cover;

		  -o-background-size: cover;

		  background-size: cover;


	}
</style>
<section id="hero-portfolio" class="">

</section> <!-- End Container -->	

<section id="Contact-Main-Content">
<!-- <h1>I am contact</h1> -->
	<div id="primary" class="container content-area">
		<main id="main" class="site-main contact-content" role="main">

			<div class="col-sm-6 col-md-6 col-lg-6">
				<article class="left-text-content">

					<h2 class="headline-social">Categories</h2>
						
					<?php wp_nav_menu( array( 'theme_location' => 'portfolio' ) ); ?>


				</article>
			</div>

			<div class="col-sm-6 col-md-6 col-lg-6">
				<article class="right-form-content">

					<h2 class="headline-form"><?php the_field('headline_right'); ?></h2>
					<p class="sub-headline-form"><?php the_field('subheadline_right'); ?></p>

					<figure>
						
						<?php echo do_shortcode( get_field( 'form_shortcode_right' ) ); ?>
						<?php //echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
						
					</figure>

				</article>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	
</section> <!-- End Container -->	

<?php
get_footer();
