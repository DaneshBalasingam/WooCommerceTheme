<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
        wp_deregister_script('jquery');
        wp_register_script( 'jquery', get_template_directory_uri() . '/js/libs/jquery-1.11.0.min.js' );

        wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/libs/bootstrap.min.js', array( 'jquery' ) );
        wp_register_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ) );
        wp_register_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ) );
        
        
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'bootstrap' );
        wp_enqueue_script( 'navigation' );
        wp_enqueue_script( 'custom' );
        

	}
	

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

     $headArgs = array(
        'width'         => 980,
        'height'        => 150
    );
    add_theme_support( 'custom-header', $headArgs );


    //adds jetpack for site logo support

    add_theme_support( 'site-logo' );

    $args = array(
        'header-text' => array(
            'site-title',
            'site-description',
        ),
        'size' => 'medium',
    );
    add_theme_support( 'site-logo', $args );

    

    // Create a custom image size for Site Logo. Cannot exceed 90px
    add_image_size( 'mytheme-logo', 90, 0 );
     
    // Declare theme support for Site Logo.
    add_theme_support( 'site-logo', array(
        'size' => 'mytheme-logo',
    ) );


    
    if (function_exists('register_nav_menus')) {
        register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'danesh' ),
        /*'top-primary-menu' => __('Top primary menu'),*/
        'left-sidebar-menu' => __('Left sidebar menu')
        ) );
    }


	if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Sidebar Widgets',
            'id' => 'sidebar-widgets',
            'description' => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>'
        ));

        register_sidebar(array(
        'name' => 'Footer Widgets',
        'id' => 'footer-widgets',
        'description' => 'These are widgets for the footer.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));

        register_sidebar(array(
        'name' => 'Cart Widgets',
        'id' => 'cart-widgets',
        'description' => 'These are widgets for the cart.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));

    }

    add_filter('loop_shop_columns', 'loop_columns');
    if (!function_exists('loop_columns')) {
        function loop_columns() {
            return 3; // 3 products per row
        }
    }

    remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);

    //remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10, 0);



    

?>