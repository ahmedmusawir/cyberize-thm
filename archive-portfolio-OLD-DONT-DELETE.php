<?php
/**
 * The template for displaying all pages.
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header(); ?>


<?php 

$paged = 0;
if ( get_query_var('paged') ) $paged = get_query_var('paged');
if ( get_query_var('page') ) $paged = get_query_var('page');
 
query_posts( '&post_type=portfolio&paged=' . $paged );
 
?>
<section class="container">
	<div id="primary" class="content-area">
	
		<main id="main" class="site-main" role="main">

			<!-- <img class="img-responsive" src="/wp-content/uploads/2018/02/Screen-Shot-2018-02-27-at-10.47.27-AM.png"> -->

		<?php 

			$custom_taxes = get_terms('product-type'); 
			// print_r($custom_taxes);	
		?>

			<article class="col-md-moose text-center">

				<div id="grid-filter" class="center-block">

				    <a class="btn btn-default category active" data-value="">All Categories</a>
	
				  	<?php foreach ( $custom_taxes as $taxonomy ) : ?>  	

				    <a class="btn btn-default category" data-value="<?php echo $taxonomy->slug; ?>"><?php echo $taxonomy->name; ?></a>
					
					<?php endforeach; ?>



				    <br> <hr>

				</div> <!-- END OF GRID FILTER -->

				<br>

				<div id="portfolio-masonry-grid">

				    <div class="grid-sizer"></div>
					<?php 
					
					$counter = 0;
					$item_count = 0;

					$args = array(
						'post_type' => 'portfolio',
						'posts_per_page' => 100,
						'paged' => $paged,
					);	
					
					$front_page_post_items = new WP_Query($args);		
					
						if ( $front_page_post_items->have_posts() ) :
					
							/* Start the Loop */
							while ( $front_page_post_items->have_posts() ) : $front_page_post_items->the_post(); ?>

							<?php $counter++; ?>
							<?php $item_count++; ?>
					
							<?php 
								$custom_taxes = wp_get_post_terms( $post->ID, array('product-type') );
								$taxonomy_names = "";
					
								foreach ( $custom_taxes as $taxonomy ) {
									$taxonomy_names .= $taxonomy->slug . " ";
								}
							?>
							
						    <div class="grid-item <?php echo $taxonomy_names; ?>" >
						    <figure class="hover-cover">

						    	<div class="the-cover">

						        <article class="content-block clearfix">
						           
									<a class="" href="#" data-featherlight="#portfolio-single-<?php echo $item_count; ?>">

						    			<i class="fa fa-eye" aria-hidden="true"></i>

										<?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
									</a>


									
										<!-- <h3 class="headline"><?php the_title(); ?></h3>	 -->
									
										<!-- <p class="text-only"> -->
										<?php //the_content(); ?>

										<div class="social-icons text-center">
											<?php //echo do_shortcode('[addtoany]'); ?>
											<a class="btn btn-primary btn-sm" href="#" data-featherlight="#portfolio-single-<?php echo $item_count; ?>" style="border: 3px solid white; border-radius: 50px;">
												Click To View
											</a>
										</div>													
										<!-- </p> -->


<!-- PORTFOLIO SINGLE DESCRIPTION POP UP BOX -->

<section id="PORTFOLIO-POPUP" class="hide">

	<div class="portfolio-single-popup" id="portfolio-single-<?php echo $item_count; ?>">
		
		<figure class="col-sm-8 col-md-8 col-lg-8">

			<article class="left-content">

				<header id="header" class="animated zoomIn">

					<img class="img-responsive pull-right" src="/wp-content/uploads/2018/01/just-moose-head-100x80.png" alt="">

					<h2 class="title">
						<?php the_field('portfolio_title'); ?>
					</h2>
					<h4 class="subtitle">
						<?php the_field('portfolio_subtitle'); ?>
					</h4>
					<div class="btn-holder">
						<a class="btn btn-primary btn-lg" href="/request-quote/">REQUEST QUOTE</a>
					</div>
	
				</header><!-- /header -->

				<main>

					<figure>
						
						<img class="img-responsive center-block" src="<?php the_field('portfolio_large_image_1'); ?>" alt="">
						<!-- <img class="img-responsive center-block" src="/wp-content/uploads/2018/01/metro-1.jpg" alt=""> -->
						
					</figure>
					<figure>
						
						<img class="img-responsive center-block" src="<?php the_field('portfolio_large_image_2'); ?>" alt="">
						<!-- <img class="img-responsive center-block" src="/wp-content/uploads/2018/01/metro-2.jpg" alt=""> -->
						
					</figure>
					<figure>
						
						<img class="img-responsive center-block" src="<?php the_field('portfolio_large_image_3'); ?>" alt="">
						<!-- <img class="img-responsive center-block" src="/wp-content/uploads/2018/01/metro-6.jpg" alt=""> -->
						
					</figure>
					<figure>
						
						<img class="img-responsive center-block" src="<?php the_field('portfolio_large_image_4'); ?>" alt="">
						<!-- <img class="img-responsive center-block" src="/wp-content/uploads/2018/01/metro-4.jpg" alt=""> -->
						
					</figure>
					
				</main>
				
			</article>
			
		</figure>
		<figure class="col-sm-4 col-md-4 col-lg-4">

			<article class="right-content">

				<div class="content">
					
					<h5 class="title animated bounceInRight">
						PROJECT BY:
					</h5>
					<p>
						<?php the_field('portfolio_project_by'); ?>
					</p>
					<hr>

					<h5 class="title animated bounceInRight">
						PROJECT GENRE:
					</h5>
					<p>
						<?php the_field('portfolio_project_genere'); ?>
					</p>
					<hr>

					<h5 class="title animated bounceInRight">
						<b>PROJECT DETAILS:</b>
					</h5>
					
					<?php the_field('portfolio_details'); ?>				
				
				</div>
				<hr>
	
				<figure class="icon-block">
					
					<img class="img-responsive" src="/wp-content/uploads/2018/01/html-css-js-icons-final-450x70.png" alt="">
					
				</figure>
					
				
			</article>
			
		</figure>		

	</div>
	
</section>	

<!-- END PORTFOLIO SINGLE DESCRIPTION POP UP BOX -->

						        </article>
						        </div> <!-- END THE COVER -->
						    </figure> <!-- END HOVER COVER -->
						    </div>							
					
							<?php 
					
							endwhile;
					
							else :
					
								get_template_part( 'template-parts/content', 'none' );
					
							endif; 

								wp_reset_postdata();

							?>
					
		    

				</div>
			<!-- End of Masonry Grid  -->
				
				<h2 id="pagination">

				<?php  if(1 == $paged) : ?>

						<div class="paging-first-page"><?php next_posts_link(); ?></div>

				<?php elseif( $counter < 100 ) : ?>

					<div class="paging-text"><aside class="pull-right"><?php previous_posts_link(); ?></aside></div>
				
				<?php else: ?>
				
					<div class="paging-text"><aside class="pull-left"><?php next_posts_link(); ?></aside><aside class="pull-right"><?php previous_posts_link(); ?></aside></div>
			
				<?php endif; ?>
					

				</h2>		


			</article> <!-- END col-md-moose -->

 

		</main><!-- #main -->
	</div><!-- #primary -->
	
</section> <!-- End Container -->	

<?php
get_footer();
