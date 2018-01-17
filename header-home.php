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
<?php wp_deregister_script('jquery'); ?>
<?php wp_head(); ?>
</head>

<!--=====================================
=            TOP IMAGE MODAL            =
======================================-->

<!-- THE TOP HERO BUTTON MODAL CODE -->

<!-- Modal Top one-->

<div class="modal fade" id="myModal-hero" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header" style="background: orangered; color: white;">

                <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close" style="color: white;"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title text-center" id="myModalLabel" style="color: white;">www.cyberizegroup.com</h4>

            </div>

            <div class="modal-body">

                <section id="popup-form-click" class="clearfix">

                    <article class="popup-text">

                        <figure>

                            <?php the_field( 'hero_modal_form_code' ); ?>
                            
                            <!-- FOLLOWING IS FOR BLOG INDEX PAGE ACF -->
                            <?php //the_field('blog_page_optin_image_mailchimp_form_code', get_option('page_for_posts')); ?> 

                        </figure>

                    </article>

                </section>

            </div>

        </div>

        <div class="modal-footer hide">

            <button type="button" class="btn btn-primary center-block" data-dismiss="modal" style="background: black; color: white; border: 1px solid black;">Close</button>

        </div>

    </div>

</div>

<!--====  End of TOP HERO BUTTONMODAL  ====-->

<?php
    $hero_desktop_bg_image = get_field('hero_background_image_desktop'); // 1476 is post id                               
    $hero_mobile_bg_image = get_field('hero_background_image_mobile'); // 1476 is post id                               
    $siteLogo = get_field( 'site_logo_image', 5 ); // 1476 is post id                               
?>	

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moose-frame' ); ?></a>

<!--=====================================================
=            DARSI HERO IMAGE WITH ANIMATION            =
======================================================-->

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/hero/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/hero/component.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/tilt-img/component-1.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/social-proof/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/iphone/component3.css" />

<script src="<?php echo get_template_directory_uri(); ?>/js/social-proof/modernizr.custom.26633.js"></script>

<noscript>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/social-proof/fallback.css" />
</noscript>

<section id="drasi-home-top-hero-unit" class="demo-2">
    
    <main>
        <img class="home-hero-mobile-bg img-responsive visible-xs visible-sm" src="<?php echo $hero_mobile_bg_image; ?>" alt="">
        <!-- Initial markup -->
        <div class="segmenter hidden-xs hidden-sm" style="background-image: url(<?php echo $hero_desktop_bg_image; ?>)"></div>
        <h2 class="trigger-headline trigger-headline--hidden hidden-xs hidden-sm">
        <span>C</span><span>Y</span><span>B</span><span>E</span><span>R</span><span>I</span><span>Z</span><span>E</span>
        <span>
        	<!-- <img class="img-responsive logo" src="/wp-content/uploads/2018/01/white-label-agency-1.png" alt=""> -->
        </span>
        <span>G</span><span>R</span><span>O</span><span>U</span><span>P</span></h2>
        <div class="bottom-nav hide">
            <button class="btn btn--trigger">Show Effect</button>
        </div>
        <article id="TOP-HERO-INFO-BOX" class="flex-container">
           <div class="hero-info-content">
           
               <h1 class="headline text-center"><?php the_field('hero_sub_headline_text'); ?></h1>
               <h2 class="btn-holder text-center">
                   <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal-hero"><?php the_field('hero_button_text'); ?></a>
               </h2>

           </div>
        </article>
    </main>
    <script src="<?php echo get_template_directory_uri(); ?>/js/hero/anime.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/hero/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/hero/main.js"></script>
    <script>
    (function() {
        var headline = document.querySelector('.trigger-headline'),
            trigger = document.querySelector('.btn--trigger'),
            segmenter = new Segmenter(document.querySelector('.segmenter'), {
                pieces: 4,
                animation: {
                    duration: 1500,
                    easing: 'easeInOutExpo',
                    delay: 10,
                    translateZ: 100
                },
                parallax: true,
                positions: [
                    {top: 0, left: 0, width: 45, height: 45},
                    {top: 55, left: 0, width: 45, height: 45},
                    {top: 0, left: 55, width: 45, height: 45},
                    {top: 55, left: 55, width: 45, height: 45}
                ],
                onReady: function() {
                    trigger.classList.remove('btn--hidden');
                        segmenter.animate();
                        headline.classList.remove('trigger-headline--hidden');
                        // this.classList.add('btn--hidden');
                }
            });
    })();
    </script>
</section>

<!--====  End of DARSI HERO IMAGE WITH ANIMATION  ====-->


	<header id="masthead" class="site-header" role="banner">
	
		<div class="navbar-container">
			<!-- <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> -->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	
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
                <style type="text/css" media="screen">
                    #menu-main-menu li a, .current-menu-item {
                        /* border: 1rem dotted red; */
                        font-weight: 700 !important;
                        /* font-size: 2rem; */
                    }
                </style>                
			    	
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

	



















