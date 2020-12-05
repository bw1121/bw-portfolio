<?php get_header(); ?>

<div class="container content">
    <div class="row page-content">
        <main class="col-lg-8 page-copy">
            <?php 
                if( have_posts() ) {
                    while( have_posts() ) {
                        the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    <?php }
                }
            ?>
        </main>
        <section class="col-lg-4">
            <?php dynamic_sidebar( 'page-sidebar' ); ?>
        </section>
    </div>
</div>

<?php get_footer(); ?>