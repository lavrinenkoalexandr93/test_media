<?php
add_action( 'wp_enqueue_scripts', function () {
	
	wp_enqueue_style( 'font1', 'https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@500&display=swap' );
	wp_enqueue_style( 'font2', 'https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@500&family=Rubik:wght@500&display=swap' );
	wp_enqueue_style( 'preconnect1', 'https://fonts.googleapis.com' );
	wp_enqueue_style( 'preconnect2', 'https://fonts.gstatic.com' );
	
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/style.css' );
	wp_enqueue_style( 'bootstrap_style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' );
	
	
	
	
	
	

    
	 wp_register_script('custom-js', get_template_directory_uri() . '/assets/app.js');
    wp_enqueue_script('custom-js');
	wp_enqueue_script( 'bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' ,  array('jquery'), NULL, true );
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
});

add_theme_support('post-thumbnails');
?>