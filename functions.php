<?php


//Theme Files Start
function clean_files() {
	// wp_enqueue_style( 'Custom-Google-Font', '' );
	// wp_enqueue_script( 'font-awesome', '//kit.fontawesome.com/a3112015b5.js' );
	

	//CSS Files
	wp_enqueue_style( 'theme_main_css', 'get_stylesheet_uri()');
	wp_enqueue_style( 'css1', get_template_directory_uri() . '/assets/web/assets/mobirise-icons/mobirise-icons.css' );
	wp_enqueue_style( 'css2', get_template_directory_uri() . '/assets/tether/tether.min.css' );
	wp_enqueue_style( 'css3', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'css4', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap-grid.min.css' );
	wp_enqueue_style( 'css5', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap-reboot.min.css' );
	wp_enqueue_style( 'css6', get_template_directory_uri() . '/assets/socicon/css/styles.css' );
	wp_enqueue_style( 'css7', get_template_directory_uri() . '/assets/dropdown/css/style.css' );
	wp_enqueue_style( 'css8', get_template_directory_uri() . '/assets/theme/css/style.css' );
	wp_enqueue_style( 'css9', get_template_directory_uri() . '/assets/mobirise/css/mbr-additional.css' );

	//JS Scripts
	wp_enqueue_script( 'Js1', get_template_directory_uri() . '/assets/web/assets/jquery/jquery.min.js', Null, 1.0, True );
	wp_enqueue_script( 'Js2', get_template_directory_uri() . '/assets/popper/popper.min.js', Null, 1.0, True);
	wp_enqueue_script( 'Js3', get_template_directory_uri() . '/assets/tether/tether.min.js', Null, 1.0, True);
	wp_enqueue_script( 'Js4', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', Null, 1.0, True);
	wp_enqueue_script( 'Js5', get_template_directory_uri() . '/assets/dropdown/js/nav-dropdown.js', Null, 1.0, True);
	wp_enqueue_script( 'Js6', get_template_directory_uri() . '/assets/dropdown/js/navbar-dropdown.js', Null, 1.0, True);
	wp_enqueue_script( 'Js7', get_template_directory_uri() . '/assets/touchswipe/jquery.touch-swipe.min.js', Null, 1.0, True);
	wp_enqueue_script( 'Js8', get_template_directory_uri() . '/assets/parallax/jarallax.min.js', Null, 1.0, True);
	wp_enqueue_script( 'Js9', get_template_directory_uri() . '/assets/smoothscroll/smooth-scroll.js', Null, 1.0, True);
	wp_enqueue_script( 'Js10', get_template_directory_uri() . '/assets/theme/js/script.js', Null, 1.0, True);
}

add_action('wp_enqueue_scripts', 'clean_files' );
//Theme Files Ends


//Theme Features Start
function clean_features () {
	add_theme_support( 'title-tag' );

}

add_action('after_setup_theme', 'clean_features' );
//Theme Features Ends

?>