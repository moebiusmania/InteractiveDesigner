<?php 

// Widget SKILL CARD
class SkillCard extends WP_Widget {
	
	// Costruttore con proprieta' di base
	public function __construct() {
		parent::__construct(
	 		'skill_card', // Base ID
			'Skill Card', // Name
			array( 'description' => __( 'I box animati', 'text_domain' ), ) // Args
		);
	}
	
	// Quello che viene mostrato nella backend
 	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
			$descr = $instance[ 'descr' ];
			$url = $instance[ 'url' ];
			$ico = $instance[ 'ico' ];
		}
		else {
			$title = __( 'Titolo Box', 'text_domain' );
			$descr = __( 'Descrizione box', 'text_domain' );
			$url = __( '#', 'text_domain' );
			$ico = __( 'icon-off', 'text_domain' );
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id( 'descr' ); ?>"><?php _e( 'Descrizione:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'descr' ); ?>" name="<?php echo $this->get_field_name( 'descr' ); ?>" type="text" value="<?php echo esc_attr( $descr ); ?>" />
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
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['descr'] = strip_tags( $new_instance['descr'] );
		$instance['url'] = strip_tags( $new_instance['url'] );
		$instance['ico'] = strip_tags( $new_instance['ico'] );

		return $instance;
	}
	
	// Quello che viene mostrato nel tema
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$descr = apply_filters( 'widget_text', $instance['descr'] );
		$url = $instance['url'];
		$ico = $instance['ico'];
		
		echo('<a href="'.$url.'">');
		echo $before_widget;
		if ( ! empty( $title ) )
			echo $before_title . $title . $after_title;
		?>
			<p><?php echo($descr); ?></p>
			<i class="<?php echo($ico); ?>" ></i>
		<?php
		echo $after_widget;
		echo('</a>');
	}
}
register_widget( 'SkillCard' );

?>