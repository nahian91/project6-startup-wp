<?php

// Stratup Category Widget

class startup_category_widget extends WP_Widget {
 
    function __construct() {
    parent::__construct(
     
        'startup_category_widget', 
        __('Startup Category Widget', 'startup'), 
        array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'startup' ), )
        );
    }
     
    // Creating widget front-end
     
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
     
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
    
    ?>

    <!-- Category Start -->    
        <div class="link-animated d-flex flex-column justify-content-start">
            
            <?php 
                $cats = get_categories();
                foreach($cats as $cat) {
            ?>
                <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="<?php echo esc_url(get_category_link( $cat->term_id ));?>"><i class="fa fa-arrow-right me-2"></i><?php echo $cat->name;?> - <?php echo $cat->count;?></a>
                
            <?php
                }
            ?>
        </div>
    <!-- Category End -->
        
    <?php

    echo $args['after_widget'];
    }
     
    // Widget Backend
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'Categories', 'wpb_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php
    }
     
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    // Class wpb_widget ends here
    } 
     
    // Register and load the widget
    function startup_category_load_widget() {
        register_widget( 'startup_category_widget' );
    }
add_action( 'widgets_init', 'startup_category_load_widget' );