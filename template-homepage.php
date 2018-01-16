<?php
/**
 * The template for displaying all pages with Sidebar
 *
 * Template Name: Home Page Template
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header('home'); ?>

<section id="drasi-home-top-info-unit" class="container-fluid">

	<main class="container">
		
        <figure class="col-md-2 col-lg-2"></figure>
		<figure class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
            <div class="content">
                <article class="text-only">
                    <h1 class="headline"><?php the_field('info_block_headline'); ?></h1>

                    <p><?php the_field('info_block_text_box'); ?></p>
                    
                </article>
            </div>      
        </figure>

	</main>
	
</section> <!-- End imb-home-top-roadmap -->	

<section id="drasi-home-tilt-image-unit" class="">


    <main class="container-fluid">


            <section class="content content--c2">

                <a href="#" class="tilter tilter--2" >
                    <figure class="tilter__figure">
                        <img class="tilter__image" src="<?php the_field('tilted_image'); ?>" alt="Cyberize Group" />
                        <!-- <img class="tilter__image" src="/wp-content/uploads/2018/01/tilt-image.png" alt="Cyberize Group" /> -->
                        <div class="tilter__deco tilter__deco--shine"><div></div></div>
                        <div class="tilter__deco tilter__deco--overlay"></div>
                        <figcaption class="tilter__caption">
                            <h3 class="tilter__title"><?php the_field('tilted_img_title'); ?></h3>
                            <!-- <h3 class="tilter__title">Cyberize Group</h3> -->
                            <p class="tilter__description"><?php the_field('tilted_image_subtitle'); ?></p>
                            <!-- <p class="tilter__description">Design, Development & Support</p> -->
                        </figcaption>
                        <svg class="tilter__deco tilter__deco--lines" viewBox="10 0 300 115">
                            <path d="M20.5,20.5h260v375h-260V20.5z" />
                        </svg>
                    </figure>
                </a>

                <div class="box-content col-md-offset-5">
                    <article class="text-content">
                        <h2 class="headline">
                            <?php the_field('tilted_img_text_box_title'); ?>
                        </h2>
                        
                        <?php the_field('tilted_img_text_box_text'); ?>

                    </article>
                </div>                  
            </section>
    
        
    </main>
    <script src="<?php echo get_template_directory_uri(); ?>/js/tilt-img/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/tilt-img/anime.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/tilt-img/main.js"></script>        
    <script>
        (function() {
            var tiltSettings = [
            {},
            {
                movement: {
                    imgWrapper : {
                        translation : {x: 10, y: 10, z: 30},
                        rotation : {x: 0, y: -10, z: 0},
                        reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
                    },
                    lines : {
                        translation : {x: 10, y: 10, z: [0,70]},
                        rotation : {x: 0, y: 0, z: -2},
                        reverseAnimation : {duration : 2000, easing : 'easeOutExpo'}
                    },
                    caption : {
                        rotation : {x: 0, y: 0, z: 2},
                        reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
                    },
                    overlay : {
                        translation : {x: 10, y: -10, z: 0},
                        rotation : {x: 0, y: 0, z: 2},
                        reverseAnimation : {duration : 2000, easing : 'easeOutExpo'}
                    },
                    shine : {
                        translation : {x: 100, y: 100, z: 0},
                        reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
                    }
                }
            },
            {
                movement: {
                    imgWrapper : {
                        rotation : {x: -5, y: 10, z: 0},
                        reverseAnimation : {duration : 900, easing : 'easeOutCubic'}
                    },
                    caption : {
                        translation : {x: 30, y: 30, z: [0,40]},
                        rotation : {x: [0,15], y: 0, z: 0},
                        reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
                    },
                    overlay : {
                        translation : {x: 10, y: 10, z: [0,20]},
                        reverseAnimation : {duration : 1000, easing : 'easeOutExpo'}
                    },
                    shine : {
                        translation : {x: 100, y: 100, z: 0},
                        reverseAnimation : {duration : 900, easing : 'easeOutCubic'}
                    }
                }
            },
            {
                movement: {
                    imgWrapper : {
                        rotation : {x: -5, y: 10, z: 0},
                        reverseAnimation : {duration : 50, easing : 'easeOutQuad'}
                    },
                    caption : {
                        translation : {x: 20, y: 20, z: 0},
                        reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
                    },
                    overlay : {
                        translation : {x: 5, y: -5, z: 0},
                        rotation : {x: 0, y: 0, z: 6},
                        reverseAnimation : {duration : 1000, easing : 'easeOutQuad'}
                    },
                    shine : {
                        translation : {x: 50, y: 50, z: 0},
                        reverseAnimation : {duration : 50, easing : 'easeOutQuad'}
                    }
                }
            },
            {
                movement: {
                    imgWrapper : {
                        translation : {x: 0, y: -8, z: 0},
                        rotation : {x: 3, y: 3, z: 0},
                        reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
                    },
                    lines : {
                        translation : {x: 15, y: 15, z: [0,15]},
                        reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
                    },
                    overlay : {
                        translation : {x: 0, y: 8, z: 0},
                        reverseAnimation : {duration : 600, easing : 'easeOutExpo'}
                    },
                    caption : {
                        translation : {x: 10, y: -15, z: 0},
                        reverseAnimation : {duration : 900, easing : 'easeOutExpo'}
                    },
                    shine : {
                        translation : {x: 50, y: 50, z: 0},
                        reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
                    }
                }
            },
            {
                movement: {
                    lines : {
                        translation : {x: -5, y: 5, z: 0},
                        reverseAnimation : {duration : 1000, easing : 'easeOutExpo'}
                    },
                    caption : {
                        translation : {x: 15, y: 15, z: 0},
                        rotation : {x: 0, y: 0, z: 3},
                        reverseAnimation : {duration : 1500, easing : 'easeOutElastic', elasticity : 700}
                    },
                    overlay : {
                        translation : {x: 15, y: -15, z: 0},
                        reverseAnimation : {duration : 500,easing : 'easeOutExpo'}
                    },
                    shine : {
                        translation : {x: 50, y: 50, z: 0},
                        reverseAnimation : {duration : 500, easing : 'easeOutExpo'}
                    }
                }
            },
            {
                movement: {
                    imgWrapper : {
                        translation : {x: 5, y: 5, z: 0},
                        reverseAnimation : {duration : 800, easing : 'easeOutQuart'}
                    },
                    caption : {
                        translation : {x: 10, y: 10, z: [0,50]},
                        reverseAnimation : {duration : 1000, easing : 'easeOutQuart'}
                    },
                    shine : {
                        translation : {x: 50, y: 50, z: 0},
                        reverseAnimation : {duration : 800, easing : 'easeOutQuart'}
                    }
                }
            },
            {
                movement: {
                    lines : {
                        translation : {x: 40, y: 40, z: 0},
                        reverseAnimation : {duration : 1500, easing : 'easeOutElastic'}
                    },
                    caption : {
                        translation : {x: 20, y: 20, z: 0},
                        rotation : {x: 0, y: 0, z: -5},
                        reverseAnimation : {duration : 1000, easing : 'easeOutExpo'}
                    },
                    overlay : {
                        translation : {x: -30, y: -30, z: 0},
                        rotation : {x: 0, y: 0, z: 3},
                        reverseAnimation : {duration : 750, easing : 'easeOutExpo'}
                    },
                    shine : {
                        translation : {x: 100, y: 100, z: 0},
                        reverseAnimation : {duration : 750, easing : 'easeOutExpo'}
                    }
                }
            }];

            function init() {
                var idx = 0;
                [].slice.call(document.querySelectorAll('a.tilter')).forEach(function(el, pos) { 
                    idx = pos%2 === 0 ? idx+1 : idx;
                    new TiltFx(el, tiltSettings[idx-1]);
                });
            }

            // Preload all images.
            imagesLoaded(document.querySelector('main'), function() {
                document.body.classList.remove('loading');
                init();
            });

            // REMOVE THIS!
            // For Demo purposes only. Prevent the click event.
            [].slice.call(document.querySelectorAll('a[href="#"]')).forEach(function(el) {
                el.addEventListener('click', function(ev) { ev.preventDefault(); });
            });

            var pater = document.querySelector('.pater'),
                // paterSVG = pater.querySelector('.pater__svg'),
                pathEl = paterSVG.querySelector('path'),
                paths = {default: pathEl.getAttribute('d'), active: paterSVG.getAttribute('data-path-hover')};

            pater.addEventListener('mouseenter', function() {
                anime.remove(pathEl);
                anime({
                    targets: pathEl,
                    d: paths.active,
                    duration: 400,
                    easing: 'easeOutQuad'
                });
            });

            pater.addEventListener('mouseleave', function() {
                anime.remove(pathEl);
                anime({
                    targets: pathEl,
                    d: paths.default,
                    duration: 400,
                    easing: 'easeOutExpo'
                });
            });
        })();
        </script>
	
</section> <!-- End imb-home-info-block -->

<section id="drasi-home-service-roadmap" class="container-fluid">

    <div class="main">
        
        <h1 class="social-proof-title text-center visible-xs"><?php the_field('iphone_block_title'); ?></h1>
        <!-- <h1 class="social-proof-title text-center visible-xs">Our Focus</h1> -->
        <img class="img-responsive center-block visible-xs" src="/wp-content/uploads/2017/10/iPhone.png" alt="">
        
        <div id="ac-wrapper" class="ac-wrapper hidden-xs">
            <h2><?php the_field('iphone_block_title'); ?><span><?php the_field('iphone_block_subtitle'); ?></span></h2>
            <!-- <h2>Our Focus <span>Click &amp; Find Out</span></h2> -->
            <div class="ac-device">
                <a href="#"><img src="<?php the_field('iphone_screen_1'); ?>"/></a>
                <!-- <a href="#"><img src="/wp-content/uploads/2017/10/screen1.png"/></a> -->
                <h3 class="ac-title"><?php the_field('iphone_screen_1_text'); ?></h3>
                <!-- <h3 class="ac-title">The Best Digital Media Agency</h3> -->
                <nav>
                    <span>&lt;</span>
                    <span>&gt;</span>
                </nav>
            </div>
            <div class="ac-grid">
                <a href="#"><img src="<?php the_field('iphone_screen_1'); ?>"/><span><?php the_field('iphone_screen_1_text'); ?></span></a>
                <!-- <a href="#"><img src="/wp-content/uploads/2017/10/screen1.png"/><span>Web Design</span></a> -->
                <a href="#"><img src="<?php the_field('iphone_screen_2'); ?>"/><span><?php the_field('iphone_screen_2_text'); ?></span></a>
                <!-- <a href="#"><img src="/wp-content/uploads/2017/10/screen2.jpg"/><span>Web Development</span></a> -->
                <a href="#"><img src="<?php the_field('iphone_screen_3'); ?>"/><span><?php the_field('iphone_screen_3_text'); ?></span></a>
                <!-- <a href="#"><img src="/wp-content/uploads/2017/10/screen3.jpg"/><span>Social Media</span></a> -->
                <a href="#"><img src="<?php the_field('iphone_screen_4'); ?>"/><span><?php the_field('iphone_screen_4_text'); ?></span></a>
                <!-- <a href="#"><img src="/wp-content/uploads/2017/10/screen4.jpg"/><span>Support</span></a> -->
            </div>
        </div>  
        <!-- <p>Click to toggle between single and grid view.</p>             -->
    </div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/js/iphone/appshowcase_3.js"></script>
<script>
    $(function() {
        AppShowcase.init();
    });
</script>

    <h1 class="social-proof-title text-center"><?php the_field('technology_headline'); ?></h1>

    
</section> <!-- End imb-home-info-block -->

<section id="drasi-home-social-proof"  class="main">

    <div id="ri-grid" class="ri-grid ri-grid-size-2">
        <!-- <img class="ri-loading-image" src="images/loading.gif"/> -->
        <ul>
            <li><a href="#"><img src="/wp-content/uploads/2017/10/img-1.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2018/01/logo-1.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2017/10/img-11.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2017/10/img-10.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2017/10/img-17.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2018/01/logo-2.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2017/10/img-16.jpg"/></a></li>
            <!-- <li><a href="#"><img src="/wp-content/uploads/2017/10/img-6.jpg"/></a></li> -->
            <li><a href="#"><img src="/wp-content/uploads/2017/10/img-3.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2018/01/logo-5.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2017/10/img-11.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2018/01/logo-12.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2017/10/img-16.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2018/01/logo-4.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2017/10/img-11.jpg"/></a></li>
            <!-- <li><a href="#"><img src="/wp-content/uploads/2017/10/img-3.jpg"/></a></li> -->
            <li><a href="#"><img src="/wp-content/uploads/2017/10/img-15.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2018/01/logo-7.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2017/10/img-8.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2018/01/logo-8.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2017/10/img-10.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2018/01/logo-3.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2017/10/img-5.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2018/01/logo-9.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2017/10/img-4.jpg"/></a></li>
            <!-- <li><a href="#"><img src="/wp-content/uploads/2017/10/img-3.jpg"/></a></li> -->
            <li><a href="#"><img src="/wp-content/uploads/2018/01/logo-10.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2017/10/img-2.jpg"/></a></li>
            <li><a href="#"><img src="/wp-content/uploads/2018/01/logo-11.jpg"/></a></li>
            
        </ul>
    </div>
    <p class="codrops-info"><strong>Demo 2:</strong> "fadeInOut" animation / 100% container width / 1 image switch at a time / 600ms between switching</p>
</section>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/social-proof/jquery.gridrotator.js"></script>
<script type="text/javascript"> 
    $(function() {
    
        $( '#ri-grid' ).gridrotator( {
            rows        : 2,
            columns     : 8,
            animType    : 'fadeInOut',
            animSpeed   : 1500,
            interval    : 1000,
            step        : 3,
            w320        : {
                rows    : 3,
                columns : 4
            },
            w240        : {
                rows    : 3,
                columns : 4
            }
        } );
    
    });
</script>

<section id="drasi-home-video-block" class="container-fluid">

	<main class="container">
		
        <figure id="drasi-home-video" class="col-sm-12 col-md-12 col-12">

                <div class="embed-responsive embed-responsive-16by9">

                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php the_field('video_fooer_youtube_code'); ?>?wmode=opaque&autoplay=0&loop=1&controls=0&showinfo=0&rel=0"></iframe>
                    <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oH_LfXnklRw?wmode=opaque&autoplay=0&loop=1&controls=0&showinfo=0&rel=0"></iframe> -->

                </div>

        </figure>

        <div id="drasi-home-video-text" class="row">

            <figure class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="content-left">
                    <article class="text-only">
                        <h1 class="headline"><?php the_field('video_footer_left_title'); ?></h1>
                        <!-- <h1 class="headline">Join Us</h1> -->
                        <h3 class="subheadline"><?php the_field('video_footer_left_subtitle'); ?></h3>
                        <!-- <h3 class="subheadline">We are here to help ...</h3> -->
                        <h1 class="btn-holder">
                            <a class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal-hero"><?php the_field('video_footer_left_button_text'); ?></a>
                            <!-- <a class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#myModal-hero">CLICK HERE</a> -->
                        </h1>
                    </article>
                </div>
            </figure>
            <figure class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="content-right">
                    
                    <article class="text-only">
                        <h1 class="headline"><?php the_field('video_footer_right_title'); ?></h1>
                        <!-- <h1 class="headline">Yes! We kick ass and take names!!</h1> -->

                        <p>
                            <?php the_field('video_footer_right_text'); ?>
                        </p>
                    </article>
                    <img class="img-responsive red-blob visible-lg" src="/wp-content/uploads/2018/01/drasi-home-bottom-orangered-blog.png" alt="">

                </div>      
            </figure>        
            
        </div>

	</main>	
	
</section> <!-- End imb-home-info-block -->



<?php
get_footer();
