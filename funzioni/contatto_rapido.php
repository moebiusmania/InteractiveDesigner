<?php 

// Widget SKILL CARD
class ContattoRapido extends WP_Widget {
	
	// Costruttore con proprieta' di base
	public function __construct() {
		parent::__construct(
	 		'contatto_rapido', // Base ID
			'Contatto Rapido', // Name
			array( 'description' => __( 'Una piccola form per inviare mail di contatto.', 'text_domain' ), ) // Args
		);
	}
	
	// Quello che viene mostrato nella backend
 	public function form( $instance ) {
		if ( isset( $instance[ 'titolo' ] ) ) {
			$titolo = $instance[ 'titolo' ];
			$indirizzo = $instance[ 'indirizzo' ];
		}
		else {
			$titolo = __( 'Contatto rapido', 'text_domain' );
			$indirizzo = __( get_bloginfo('admin_email'), 'text_domain' );
		}
		?>
		
		<p>
		<label for="<?php echo $this->get_field_id( 'titolo' ); ?>"><?php _e( 'Titolo:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'titolo' ); ?>" name="<?php echo $this->get_field_name( 'titolo' ); ?>" type="text" value="<?php echo esc_attr( $titolo ); ?>" />
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id( 'indirizzo' ); ?>"><?php _e( 'Indirizzo email:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'indirizzo' ); ?>" name="<?php echo $this->get_field_name( 'indirizzo' ); ?>" type="text" value="<?php echo esc_attr( $indirizzo ); ?>" />
		</p>
		
		<?php 
	}
	
	// Gestore aggiornamento dati
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['titolo'] = strip_tags( $new_instance['titolo'] );
		$instance['indirizzo'] = strip_tags( $new_instance['indirizzo'] );

		return $instance;
	}
	
	// Quello che viene mostrato nel tema
	public function widget( $args, $instance ) {
		extract( $args );
		$titolo = apply_filters( 'widget_title', $instance['titolo'] );
		$indirizzo = $instance['indirizzo'];
			
		// Renderizzazione	
		echo $before_widget;
		echo $before_title . $titolo . $after_title; ?>

		<form action="<?php bloginfo('template_url') ?>" method="get">
			<label>Chi sei?</label>
			<input name="mittente" type="text" placeholder="Sig Mario Rossi" class="input-block-level" required>
			<label>Email di contatto</label>
			<input name="indirizzo" type="email" placeholder="prova@indirizzo.it" class="input-block-level" required>
			<label>Messaggio (breve)</label>
			<textarea name="testo" class="input-block-level" required></textarea>	
			<button class="btn btn-primary btn-block">
				<i class="icon-white icon-envelope-alt"></i>
				Invia messaggio!
			</button>
		</form>
		
		<?php
		echo $after_widget;
	}
}
register_widget( 'ContattoRapido' );

?>