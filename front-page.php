<?php get_header(); ?>

    <div class="content">
        <?php
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
                <main class="container">
                    <div class="row portfolio-items">
                        <?php
                            $args = array( 'numberposts' => 6 );
                            $lastposts = get_posts( $args );

                            foreach($lastposts as $post) : setup_postdata($post); ?>
                                <article class="col-md-6 col-lg-4 individual-article"><a href="<?php the_permalink(); ?>">
                                    <div class="post-thumbnail">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                    <p class="portfolio-title"><?php the_title(); ?></p>
                                </a></article>
                            <?php endforeach; ?>
                    </div>

                    <div class="portfolio-link">
                        <a class="btn btn-primary" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">View whole portfolio</a>
                    </div>
                </main>
            <?php }
        } ?>
    </div>
<?php get_footer(); ?>