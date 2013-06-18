<?php 

// Azioni
add_action('after_setup_theme','txtEditor');



/* Customizzo editor di testo backend */
function txtEditor(){
	// Carica il file editor-style.css
	add_editor_style();
}


?>