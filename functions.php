<?php 

// Azioni
add_action('after_setup_theme','txtEditor');
add_action('after_setup_theme', 'immEvidenza');
add_action('wp_enqueue_scripts', 'caricaScripts');
add_action('widgets_init', 'creaAreeWidget');

// Filtri
add_filter( 'excerpt_length', 'riassunti', 999 );

/* ----------------------------------------------------- */

/* Imposto i riassunti a 40 parole */
function riassunti(){
	return 40;
}

/* Customizzo editor di testo backend */
function txtEditor(){
	// Carica il file editor-style.css
	add_editor_style();
}

/* Attivare Featured Image */
function immEvidenza(){
	add_theme_support('post-thumbnails'); 
	set_post_thumbnail_size(200,200,true); 
}

/* Registrazione scripts */
function caricaScripts(){
	wp_deregister_script('jquery');
    
    wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-2.0.2.min.js', false, "2.0.2",true);
    wp_register_script('sl', get_bloginfo('template_url').'/js/sl.3.0.js', array('jquery'), "3.0",true);
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('sl');
}

/* Definizioni sidebars */
function creaAreeWidget(){
	include('funzioni/sidebars.php' );
}

?>