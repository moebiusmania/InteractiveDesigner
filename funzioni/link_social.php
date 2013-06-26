<?php 

// Widget SKILL CARD
class LinkSocial extends WP_Widget {
	
	// Costruttore con proprieta' di base
	public function __construct() {
		parent::__construct(
	 		'link_social', // Base ID
			'Link Social', // Name
			array( 'description' => __( 'Collegamenti a social network con icona.', 'text_domain' ), ) // Args
		);
	}
	
	// Quello che viene mostrato nella backend
 	public function form( $instance ) {
		if ( isset( $instance[ 'nome' ] ) ) {
			$nome = $instance[ 'nome' ];
			$url = $instance[ 'url' ];
			$ico = $instance[ 'ico' ];
		}
		else {
			$nome = __( 'Social', 'text_domain' );
			$url = __( '#', 'text_domain' );
			$ico = __( 'icon-facebook-sign', 'text_domain' );
		}
		?>
		
		<p>
		<label for="<?php echo $this->get_field_id( 'nome' ); ?>"><?php _e( 'Nome:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'nome' ); ?>" name="<?php echo $this->get_field_name( 'nome' ); ?>" type="text" value="<?php echo esc_attr( $nome ); ?>" />
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id( 'url' ); ?>"><?php _e( 'Url link:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" type="text" value="<?php echo esc_attr( $url ); ?>" />
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id( 'ico' ); ?>"><?php _e( 'Icona box:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'ico' ); ?>" name="<?php echo $this->get_field_name( 'ico' ); ?>" type="text" value="<?php echo esc_attr( $ico ); ?>" />
		</p>
		
		<?php 
	}
	
	// Gestore aggiornamento dati
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['nome'] = strip_tags( $new_instance['nome'] );
		$instance['url'] = strip_tags( $new_instance['url'] );
		$instance['ico'] = strip_tags( $new_instance['ico'] );

		return $instance;
	}
	
	// Quello che viene mostrato nel tema
	public function widget( $args, $instance ) {
		extract( $args );
		$nome = apply_filters( 'widget_title', $instance['nome'] );
		$url = $instance['url'];
		$ico = $instance['ico'];
		
		
	}
}
register_widget( 'LinkSocial' );

?>