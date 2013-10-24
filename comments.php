<h3>Cosa ne pensate voi altri?</h3>
<?php 

// Se ci sono commenti
if(have_comments()){
	// Elenco solo i commenti con avatar a 60 pixel
	wp_list_comments(array(
		'avatar_size' => 60,
		'type' => 'comment'
	));
} else{ ?>

<div class="alert">
	<h3>Quanto silezio qui...</h3>
	<p>Questo spazio serve per commentare ma sembra che non l'abbia ancora fatto nessuno, perche non lo fai tu per primo?</p>
</div>

<?php }

// Richiamo la form di commento
comment_form();

?>