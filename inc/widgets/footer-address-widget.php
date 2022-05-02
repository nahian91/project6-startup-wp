<?php

// Stratup Footer Address Widget

class startup_footer_address_widget extends WP_Widget {
 
    function __construct() {
    parent::__construct(
     
        'startup_footer_address_widget', 
        __('Startup Footer Address Widget', 'startup'), 
        array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'startup' ), )
        );
    }
     
    // Creating widget front-end
     
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $footer_address = $instance['footer_address'];
        $footer_email = $instance['footer_email'];
        $footer_phone = $instance['footer_phone'];
        $footer_mobile = $instance['footer_mobile'];
        $footer_tw_link = $instance['footer_tw_link'];
        $footer_fb_link = $instance['footer_fb_link'];
        $footer_ln_link = $instance['footer_ln_link'];
        $footer_ins_link = $instance['footer_ins_link'];
     
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];

    if($footer_address) {
        ?>
            <div class="d-flex mb-2">
                <i class="fas fa-home text-primary me-2 mt-1"></i>
                <p class="mb-0"><?php echo $footer_address;?></p>
            </div>
        <?php
    }
    if($footer_email) {
    ?>
        <div class="d-flex mb-2">
            <i class="fas fa-envelope text-primary me-2 mt-1"></i>
            <p class="mb-0"><?php echo $footer_email;?></p>
        </div>
    <?php
    }

    if($footer_phone) {
        ?>
            <div class="d-flex mb-2">
                <i class="fas fa-phone-alt text-primary me-2 mt-1"></i>
                <p class="mb-0"><?php echo $footer_phone;?></p>
            </div>
        <?php
    }

    if($footer_mobile) {
        ?>
            <div class="d-flex mb-2">
                <i class="fas fa-mobile-alt text-primary me-2 mt-1"></i>
                <p class="mb-0"><?php echo $footer_mobile;?></p>
            </div>
        <?php
    }

    ?>
    <div class="d-flex mt-4">
        <?php
            if($footer_tw_link) {
        ?>
            <a class="btn btn-primary btn-square me-2" href="<?php echo $footer_tw_link;?>"><i class="fab fa-twitter fw-normal"></i></a>
        <?php
            }
        ?>

        <?php
            if($footer_fb_link) {
        ?>
            <a class="btn btn-primary btn-square me-2" href="<?php echo $footer_fb_link;?>"><i class="fab fa-facebook-f fw-normal"></i></a>
        <?php
            }
        ?>

        <?php
            if($footer_ln_link) {
        ?>
            <a class="btn btn-primary btn-square me-2" href="<?php echo $footer_ln_link;?>"><i class="fab fa-linkedin-in fw-normal"></i></a>
        <?php
            }
        ?>

        <?php
            if($footer_ins_link) {
        ?>
            <a class="btn btn-primary btn-square" href="<?php echo $footer_ins_link;?>"><i class="fab fa-instagram fw-normal"></i></a>
        <?php
            }
        ?>
    </div>
<?php
    echo $args['after_widget'];
    
}
     
    // Widget Backend
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
        $title = $instance[ 'title' ];
    }
    else {
        $title = __( 'Get in touch', 'wpb_widget_domain' );
    }
    $footer_address = $instance['footer_address'];
    $footer_email = $instance['footer_email'];
    $footer_phone = $instance['footer_phone'];
    $footer_mobile = $instance['footer_mobile'];
    $footer_tw_link = $instance['footer_tw_link'];
    $footer_fb_link = $instance['footer_fb_link'];
    $footer_ln_link = $instance['footer_ln_link'];
    $footer_ins_link = $instance['footer_ins_link'];

    // Widget admin form
    ?>
    <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'footer_address' ); ?>"><?php _e( 'Address:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'footer_address' ); ?>" name="<?php echo $this->get_field_name( 'footer_address' ); ?>" type="text" value="<?php echo esc_attr( $footer_address ); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'footer_email' ); ?>"><?php _e( 'Email:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'footer_email' ); ?>" name="<?php echo $this->get_field_name( 'footer_email' ); ?>" type="email" value="<?php echo esc_attr( $footer_email ); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'footer_phone' ); ?>"><?php _e( 'Phone:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'footer_phone' ); ?>" name="<?php echo $this->get_field_name( 'footer_phone' ); ?>" type="number" value="<?php echo esc_attr( $footer_phone ); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'footer_mobile' ); ?>"><?php _e( 'Mobile:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'footer_mobile' ); ?>" name="<?php echo $this->get_field_name( 'footer_mobile' ); ?>" type="number" value="<?php echo esc_attr( $footer_mobile ); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'footer_tw_link' ); ?>"><?php _e( 'Twitter Link:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'footer_tw_link' ); ?>" name="<?php echo $this->get_field_name( 'footer_tw_link' ); ?>" type="url" value="<?php echo esc_attr( $footer_tw_link ); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'footer_fb_link' ); ?>"><?php _e( 'Facebook Link:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'footer_fb_link' ); ?>" name="<?php echo $this->get_field_name( 'footer_fb_link' ); ?>" type="url" value="<?php echo esc_attr( $footer_fb_link ); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'footer_ln_link' ); ?>"><?php _e( 'Linkedin Link:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'footer_ln_link' ); ?>" name="<?php echo $this->get_field_name( 'footer_ln_link' ); ?>" type="url" value="<?php echo esc_attr( $footer_ln_link ); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'footer_ins_link' ); ?>"><?php _e( 'Instagram Link:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'footer_ins_link' ); ?>" name="<?php echo $this->get_field_name( 'footer_ins_link' ); ?>" type="url" value="<?php echo esc_attr( $footer_ins_link ); ?>" />
    </p>
    <?php
    }
     
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['footer_address'] = $new_instance['footer_address'];
        $instance['footer_email'] = $new_instance['footer_email'];
        $instance['footer_phone'] = $new_instance['footer_phone'];
        $instance['footer_mobile'] = $new_instance['footer_mobile'];
        $instance['footer_tw_link'] = $new_instance['footer_tw_link'];
        $instance['footer_fb_link'] = $new_instance['footer_fb_link'];
        $instance['footer_ln_link'] = $new_instance['footer_ln_link'];
        $instance['footer_ins_link'] = $new_instance['footer_ins_link'];
        return $instance;
    }
     
    // Class wpb_widget ends here
    } 
     
    // Register and load the widget
    function startup_footer_address_load_widget() {
        register_widget( 'startup_footer_address_widget' );
    }
add_action( 'widgets_init', 'startup_footer_address_load_widget' );