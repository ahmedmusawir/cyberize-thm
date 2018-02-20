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

			<footer id="footer-main" class="footer-main container">

				<article class="col-sm-12 col-md-12 col-lg-12">

					<aside id="text-1" class="widget-footer-container widget_text">

						<?php 
							if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {
								echo "Please Insert a Widget!";
							}

							dynamic_sidebar( 'footer-sidebar-1' ); 

						?>

						<?php 
							if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {
								echo "Please Insert a Widget!";
							}

							dynamic_sidebar( 'footer-sidebar-2' ); 

						?>

						<?php 
							if ( ! is_active_sidebar( 'footer-sidebar-3' ) ) {
								echo "Please Insert a Widget!";
							}

							dynamic_sidebar( 'footer-sidebar-3' ); 

						?>

						<?php 
							if ( ! is_active_sidebar( 'page-bottom' ) ) {
								echo "Please Insert a Widget!";
							}

							dynamic_sidebar( 'page-bottom' ); 

						?>

				   	</aside>

				</article>


				<!-- <div id="copyright" class="copyright col-sm-12 col-md-12 col-lg-12">
					<h4>COPYRIGHT CYBERIZEGROUP.COM</h4>
					<ul>
						<li><a href="http://cyberizegroup.com/privacy-policy/">PRIVACY POLICY</a> | </li>
						<li><a href="http://cyberizegroup.com/terms-of-service/">TERMS</a> | </li>
						<li><a href="http://cyberizegroup.com/earnings-disclaimer/">DISCLAIMER</a> </li>
					</ul>
				</div> -->
				<!--==============================================================================
				=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
				===============================================================================-->
				
				<!-- <div style="color: white"><strong>Current template:</strong> <?php echo get_current_template( true ); ?></div> -->
				
				<!--====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ====-->
				

			</footer>
		</div> <!-- FOOTER CONTAINER ENDED -->

	</div> <!-- End of id="content" class="site-content" -->
</div> <!-- End of id="page" class="site" -->

<!--===========================================
=            CUSTOM ANALYTICS TAGS - FOOTER     =
============================================-->

	<?php the_field('before_bottom_body_tag_default', 'option'); ?>

	<?php the_field('before_bottom_body_tag'); ?>

<!--====  End of CUSTOM ANALYTICS TAGS  ====-->
</body>
</html>