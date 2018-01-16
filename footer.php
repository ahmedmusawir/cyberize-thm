<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wandervale
 */
wp_footer();
?>
		<div class="footer-container container-fluid">

			<footer id="footer-main" class="footer-main container">

				<article class="col-sm-12 col-md-12 col-lg-12">

					<aside id="text-1" class="widget-footer-container widget_text">

						<?php 
							// if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {
							// 	return;
							// }

							// dynamic_sidebar( 'footer-sidebar-1' ); 

						?>

				
						    <div class="footer-social">
						        <ul class="social-links-holder">
						            <a href="https://www.facebook.com/" title="Facebook" class="social-links">
						            	<i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
						            </a>
						            <a href="https://twitter.com/" title="Twitter" class="social-links">
						            	<i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
						            </a>
						            <a href="https://plus.google.com/" title="Google Plus" class="social-links">
						            	<i class="fa fa-google-plus fa-2x" aria-hidden="true"></i>
						            </a>
						        </ul>
						    </div>

						    <div class="footer-links">
						        <a class="footer-link" href="/terms/">
						        Terms
						      </a>
						        <span class="footer-divider">|</span> <a class="footer-link" href="/privacy/">
						        Privacy
						      </a>
						    </div>

						    <div class="footer-promotion">
						        For business inquiries
						        <svg width="21px" height="14px" viewBox="0 0 21 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						            <defs></defs>
						            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						                <g id="arrow-black" transform="translate(1.000000, 1.000000)" stroke="#EE5050" stroke-width="2">
						                    <g id="Group-Copy" transform="translate(9.000000, 6.000000) rotate(-270.000000) translate(-9.000000, -6.000000) translate(3.000000, -3.000000)">
						                        <path d="M6,17.5 L6,0.470613634" id="Line" stroke-linecap="square"></path>
						                        <polyline id="Path-5" points="0 5.84863281 5.81835937 0 11.5664252 5.74806587"></polyline>
						                    </g>
						                </g>
						            </g>
						        </svg> <a href="mailto:support@drasimedia.com">
						        support@cyberizegroup.com
						      </a>
						    </div>

						    <div id="copyright">
						        Copyright © 2018 Cyberize Group, LLC. All Rights Reserved.
						    </div>

				   	</aside>

				</article>


				<!-- <div id="copyright" class="copyright col-sm-12 col-md-12 col-lg-12">
					<h4>COPYRIGHT INSPIREBLISSFULBEGINNINGS.COM</h4>
					<ul>
						<li><a href="http://tianagustafson.com/privacy-policy/">PRIVACY POLICY</a> | </li>
						<li><a href="http://tianagustafson.com/terms-of-service/">TERMS</a> | </li>
						<li><a href="http://tianagustafson.com/earnings-disclaimer/">DISCLAIMER</a> </li>
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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.4/vue.js" type="text/javascript"></script> 
<script src="https://unpkg.com/axios@0.12.0/dist/axios.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.slimscroll.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/app-vue-news.js"></script>

 -->

</body>
</html>