<?php 

// Sidebars per i widget


// Le 3 nel footer
register_sidebars(3,array(
	'name' => 'Footer - colonna %d',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	'before_widget' => '<div class="span4">',
	'after_widget' => '</div>'
));


?>