<?php

    // This theme uses wp_nav_menu() in one location.
    register_nav_menu('main', 'Main navigation menu');

	// Add support for a variety of post formats
	add_theme_support( 'post-formats', array( 'produto' ) );

	// Add support for custom backgrounds
	add_custom_background();

	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'medium-thumb', 500, 300 );
	add_image_size( 'small-thumb', 150, 150 );

    // Extra widget areas
    add_action( 'widgets_init', 'widgets_init' );

    // Add the extra js

    // Add the extra css
    add_action('wp_print_styles', 'woo_override_style');

    function woo_override_style()
    {
        $styleURL = get_bloginfo('template_url') . '/assets/css/woocommerceoverride.css';

        wp_register_style( 'woooverride', $styleURL);
        wp_enqueue_style ( 'woooverride' );
    }


    function widgets_init()
    {
        register_sidebar( array(
            'name' => __( 'Sidebar Area One', 'guitarpro' ),
            'id' => 'sidebar-1',
            'description' => __( 'An optional widget area for your sidebar', 'guitarpro' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => "</aside>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );

        register_sidebar( array(
            'name' => __( 'Sidebar Area Two', 'guitarpro' ),
            'id' => 'sidebar-2',
            'description' => __( 'An optional widget area for your sidebar', 'guitarpro' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => "</aside>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );

        register_sidebar( array(
            'name' => __( 'Footer Area One', 'guitarpro' ),
            'id' => 'sidebar-3',
            'description' => __( 'An optional widget area for your site footer', 'guitarpro' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => "</aside>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );

        register_sidebar( array(
            'name' => __( 'Footer Area Two', 'guitarpro' ),
            'id' => 'sidebar-4',
            'description' => __( 'An optional widget area for your site footer', 'guitarpro' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => "</aside>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );

        register_sidebar( array(
            'name' => __( 'Footer Area Three', 'guitarpro' ),
            'id' => 'sidebar-5',
            'description' => __( 'An optional widget area for your site footer', 'guitarpro' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => "</aside>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
    }


    /**
     * Adds two classes to the array of body classes.
     * The first is if the site has only had one author with published posts.
     * The second is if a singular post being displayed
     *
     * @since Guitar_pro 1.0
     */
    function guitarpro_body_classes( $classes ) {

        if ( ! is_multi_author() ) {
            $classes[] = 'single-author';
        }

        if ( is_singular() && ! is_home())
            $classes[] = 'singular';

        return $classes;
    }
    add_filter( 'body_class', 'guitarpro_body_classes' );
?>
