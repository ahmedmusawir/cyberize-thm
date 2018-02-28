<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header('contact'); ?>

<style type="text/css">

	#hero-portfolio {

		height: 50vh;

		background: url("/wp-content/uploads/2018/02/hero-img-1920x800.jpg") no-repeat top left fixed;

		  -webkit-background-size: cover;

		  -moz-background-size: cover;

		  -o-background-size: cover;

		  background-size: cover;


	}
</style>
<section id="hero-portfolio" class="">

</section> <!-- End Container -->	
<article class="left-text-content">

	<h2 class="headline-social">Type of Sites</h2>
		
	<?php wp_nav_menu( array( 'theme_location' => 'portfolio' ) ); ?>


</article>
				
<section id="heather-archive-indx">
		<main id="col-md-moose" class="container" role="main">

			<?php
				if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

			<div id="portfolio-masonry-grid">

				<div class="grid-sizer"></div>

				
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'portfolio' );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</div> <!-- MASONRY GRID -->

		</main><!-- #main -->
	<!-- </div>#primary -->
	
</section> <!-- End Container -->	

<?php
get_footer();
