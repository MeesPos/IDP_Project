<?php
function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 75,
		'width'       => 300,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );
/**
 * (Original function) Load Stylesheets and Scripts in
 * Made WP itself very buggy, changed name to laadDingenIn to be able to
 * load yourself where you want. It only uses the scripts on the page itself
 * 
 * @return string
 */
function loadStyleScript() {
    # Sike
}

/**
 * Load Stylesheets and Scripts in
 *
 * @return string
 */
function laadDingenIn()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('themeStyle', get_template_directory_uri() . '/css/themeStyle.css');


    wp_enqueue_script('jqueryNew', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array('jquery'), 3.5, true);
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_script('bootstrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), 4.5, true);
    wp_enqueue_script('PopperJS', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), 1.16, true);

    wp_enqueue_style('FullPageSliderCSS', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.4/jquery.fullPage.min.css');
    wp_enqueue_script('fullPageSlider', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.4/jquery.fullPage.min.js', array('jquery'), 2.7, true);
   
    wp_enqueue_style('owlCarouselCSS', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('owlCarouselThemeCSS', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
    wp_enqueue_script('owlCarouselJS', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js', array('jquery'), 2.2, true);
    
    wp_enqueue_script('fontAwesome', 'https://kit.fontawesome.com/a82e000026.js', array('jquery'), 1.1, true);

    wp_enqueue_script('script', get_template_directory_uri() . '/script.js', array('jquery'), 1.1, true);
}

add_action('init', 'loadStyleScript');

/**
 * Register Navbar
 */
function register_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main menu' ),
            'footer-menu' => __( 'Footer menu' ),
        )
    );
} add_action( 'init', 'register_menus' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
} add_action( 'init', 'register_navwalker' );

// Widgets Registreren
function register_widgets() {
    register_sidebar(
        array(
            'id' => 'footer-contact',
            'name' => __('Widget Footer Contact'),
            'description' => __('Widget voor de Footers contact mogelijkheid'),
            'before_widget' => '<div class="widget-footer">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-footer-titel">',
            'after_title' => '</h3>'
        )
    );
  
}
add_action( 'init', 'register_widgets' );