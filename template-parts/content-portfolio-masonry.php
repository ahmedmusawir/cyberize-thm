<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item article-content-block'); ?>>

    <figure class="hover-cover">

        <div class="the-cover">

        <article class="content-block clearfix">
           
            <a class="" href="#" data-featherlight="#portfolio-single-<?php echo the_ID(); ?>">

                <i class="fa fa-eye" aria-hidden="true"></i>

                <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
            </a>

            <div class="social-icons text-center">
                <a class="btn btn-primary btn-sm" href="#" data-featherlight="#portfolio-single-<?php the_ID(); ?>" style="border: 3px solid white; border-radius: 50px; color: white;">
                    Click To View
                </a>
            </div>                                                  

            <!-- PORTFOLIO SINGLE DESCRIPTION POP UP BOX -->

            <section id="PORTFOLIO-POPUP" class="hide">

                <div class="portfolio-single-popup" id="portfolio-single-<?php the_ID(); ?>">
                    
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

</article><!-- #post-## -->
