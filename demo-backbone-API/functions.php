<?php

//BACKBONE API js 
//https://developer.wordpress.org/rest-api/using-the-rest-api/backbone-javascript-client/

/**
 * Enqueue scripts and styles.
 */
function apidemo_scripts() {
	wp_enqueue_style( 'apidemo-pacifico', 'https://fonts.googleapis.com/css?family=Pacifico', '', null );
	wp_enqueue_style( 'apidemo-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat', '', null );
	wp_enqueue_style( 'apidemo-style', get_stylesheet_uri(), '', time() );
	wp_enqueue_script( 'apidemo-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'apidemo-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	if( is_front_page() ) {
		wp_enqueue_script(
			'apidemo-main',
			get_template_directory_uri() . '/assets/js/main.js',
			array('wp-api', 'jquery'), //add wp-api
			time(),
			true );
	}
  wp_localize_script( 'apidemo-ideas', 'ideas', array(
     'api_url' => esc_url_raw( rest_url( ) )
  ));
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'apidemo_scripts' );

?>