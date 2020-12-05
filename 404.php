<?php get_header(); ?>

<div class="error-page content">
    <div class="container">
        <main>
            <div>
                <i class="fas fa-search"></i>
            </div>
            <div class="error-404-copy">
                <h2>Sorry</h2>
                <p>The page you're looking for was not found.</p>
                <a class="btn btn-primary" href="<?php echo get_home_url(); ?>">Back to home</a>
            </div>
        </main>
    </div>
</div>

<?php get_footer();?>