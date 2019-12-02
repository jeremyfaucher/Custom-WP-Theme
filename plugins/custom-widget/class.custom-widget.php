<?php
/**
 * Adds Foo_Widget widget.
 */
class Custom_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'custom_widget', // Base ID
			__('Custom', 'text_domain'), // Name
			array( 'description' => __( 'A simple Custom widget', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$data = array();
		$data['title'] = apply_filters( 'widget_title', $instance['title'] );
		
		
		echo $args['before_widget'];
		
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		
		//Show Custom
		echo $this->getCustom($data);
		
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$this->getForm($instance);
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
	
	/*
	 * Get and Display Custom
	 * @param  array $data
	 */
	 public function getCustom($data){
		//$output = '<div id="fb-root"></div>';
		
		//$output .= '<div class="fb-like-box" 
		//data-href= "'.$data["page_url"].'"></div>';
		
		//return $output;
	 }
	 
	 /*
	 * Get and Display Backend Form
	 * @param  array $instance
	 */
	 public function getForm($instance){
		if (isset( $instance[ 'title' ])) {
			$title = $instance[ 'title' ];
		} else {
			$title = __( 'Like Us On Facebook', 'text_domain' );
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" 
				id="<?php echo $this->get_field_id( 'title' ); ?>" 
				name="<?php echo $this->get_field_name( 'title' ); ?>" 
				type="text" value="<?php echo esc_attr( $title ); ?>"
		>
		</p>
		<?php 
	 }

} // class Foo_Widget