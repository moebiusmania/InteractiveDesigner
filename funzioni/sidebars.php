<?php 

// Sidebars per i widget


// Le 3 nel footer (ovunque)
register_sidebars(3,array(
	'name' => 'Footer - colonna %d',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	'before_widget' => '<div class="span4">',
	'after_widget' => '</div>'
));

// La barra a destra (articoli, blog e pagine)
register_sidebar(array(
	'name' => "Barra laterale",
	'description'   => 'La barra presente in molte pagine',
	'before_title'  => '<h4>',
	'after_title'  => '</h4>',
	'before_widget'  => '<div id="%1$s" class="widget">',
	'after_widget'  => '</div>',
));

// I box 'Skill Card' (home page)
register_sidebar(array(
	'name' => "Box animati",
	'description'   => 'I box animati della home page',
	'before_title'  => '<h3>',
	'after_title'  => '</h3>',
	'before_widget'  => '<section class="span4"><div class="box">',
	'after_widget'  => '</div></section>',
));


?>