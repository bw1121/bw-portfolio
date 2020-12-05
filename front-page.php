<?php get_header(); ?>

<div class="home-hero">
    <div class="container hero-content">
        <div class="row">
            <div class="hero-img col-md-6 col-lg-5">
                <?php the_post_thumbnail('full'); ?>
            </div>
            <div class="hero-copy col-md-6 col-lg-7">
                <?php 
                    if (have_posts()) {
                        while(have_posts()) {
                            the_post(); 
                            the_content();
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>