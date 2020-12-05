<?php

/*========================================================

Add stylesheets and javascripts files

==========================================================*/ 
function custom_theme_scripts() {
    //Boostrap CSS
    wp_enqueue_style('boostrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');

    //Main CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());


    //jQuery
    wp_enqueue_script('jquery');

    //JavaScript
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
    
}

add_action('wp_enqueue_scripts', 'custom_theme_scripts');



/*========================================================

Add featured images

==========================================================*/ 
add_theme_support('post-thumbnails');



/*========================================================

Custom Header Image (logo)

==========================================================*/ 
$custom_image_header = array(
    'width'     => 250, 
    'height'    => 70,
    'uploads'   => true
);

add_theme_support( 'custom-header', $custom_image_header);



/*========================================================

Add Menus

==========================================================*/ 

function register_my_menus() {
    register_nav_menus(array(
        'main-menu'         => __('Main Menu')
    ));
}

add_action('init', 'register_my_menus');



/*========================================================

Register Custom Navigation Walker

==========================================================*/
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function prefix_modify_nav_menu_args( $args ) {
    return array_merge( $args, array(
        'walker' => new WP_Bootstrap_Navwalker(),
    ) );
}
add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );



/*========================================================

Create Widget Areas

==========================================================*/
function blank_widgets_init() {
    register_sidebar (array(
        'name'          => ('Page Sidebar'),
        'id'            => 'page-sidebar',
        'description'   => 'Widget area in page sidebar',
        'before_widget' => '<div class="page-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
    register_sidebar (array(
        'name'          => ('Left Footer'),
        'id'            => 'left-footer',
        'description'   => 'Widget area in page sidebar',
        'before_widget' => '<div class="left-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
    register_sidebar (array(
        'name'          => ('Right Footer'),
        'id'            => 'right-footer',
        'description'   => 'Widget area in page sidebar',
        'before_widget' => '<div class="right-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}

add_action('widgets_init', 'blank_widgets_init');

?>