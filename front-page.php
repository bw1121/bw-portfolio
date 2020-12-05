<?php get_header(); 

    if( have_posts() ) {
        while( have_posts() ) {
            the_post(); ?>
            <!-- HERO -->
            <div class="home-hero">
                <div class="container hero-content">
                    <div class="row">
                        <div class="hero-img col-md-6 col-lg-5">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                        <div class="hero-copy col-md-6 col-lg-7">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PORTFOLIO ITEMS -->
            <main>
            <?php $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3 ) );
 
 if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post();
     // Loop output goes here
 endwhile; endif;?> 
            </main>
        <?php } //End while
    } // End if

get_footer(); ?>