<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MooseFramework
 */
wp_footer();
?>
		<div class="footer-container container-fluid">

			<footer id="footer-main" class="footer-main">

				<article class="col-sm-12 col-md-12 col-lg-12">

					<aside id="text-1" class="widget-footer-container widget_text">

						<?php 
							if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {
								return;
							}

							dynamic_sidebar( 'footer-sidebar-1' ); 

						?>

				   	</aside>

				
				</article>

				<article class="col-sm-12 col-md-12 col-lg-12">

					<aside id="text-2" class="widget-footer-container widget_text">

						<?php 
							if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {
								return;
							}

							dynamic_sidebar( 'footer-sidebar-2' ); 

						?>

				   	</aside>

				
				</article>

				<article class="col-sm-12 col-md-12 col-lg-12">

					<aside id="text-3" class="widget-footer-container widget_text">

						<?php 
							if ( ! is_active_sidebar( 'page-bottom' ) ) {
								return;
							}

							dynamic_sidebar( 'page-bottom' ); 

						?>

				   	</aside>

				
				</article>

				<!--==============================================================================
				=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
				===============================================================================-->
				
				<div style="color: white"><strong>Current template:</strong> <?php echo get_current_template( true ); ?></div>
				
				<!--====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ====-->
				

			</footer>
		</div> <!-- FOOTER CONTAINER ENDED -->

	</div> <!-- End of id="content" class="site-content" -->
</div> <!-- End of id="page" class="site" -->

</body>
</html>