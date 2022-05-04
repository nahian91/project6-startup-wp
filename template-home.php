<?php

/*
Template Name: Template Home
*/

get_header();?>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">

            <?php
                $args = array(
                    'post_type' => 'sliders',
                    'posts_per_page' => 3
                );
                $query = new WP_Query($args);
                $i = 0;
                if($query->have_posts()) {
                    while($query->have_posts()) {
                        $query->the_post();
                        $i++;
                    ?>
                    <div class="carousel-item <?php if($i == 1) { echo 'active';} ?>">
                        <img class="w-100" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <?php
                                if(class_exists('ACF')) {
                                    $slider_subtitle = get_field('slider_subtitle');
                                    $slider_btn_1_text = get_field('slider_btn_1_text');
                                    $slider_btn_1_url = get_field('slider_btn_1_url');
                                    $slider_btn_2_text = get_field('slider_btn_2_text');
                                    $slider_btn_2_url = get_field('slider_btn_2_url');
                            ?>
                                    <div class="p-3" style="max-width: 900px;">
                                <?php
                                    if($slider_subtitle) {
                                ?>
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown"><?php echo $slider_subtitle;?></h5>
                                <?php
                                    }
                                ?>                                
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn"><?php the_title();?></h1>
                                <?php
                                    if($slider_btn_1_text) {
                                ?>
                                    <a href="<?php echo esc_url($slider_btn_1_url);?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"><?php echo $slider_btn_1_text;?></a>
                                <?php
                                    }
                                ?>
                                
                                <?php
                                    if($slider_btn_2_text) {
                                ?>
                                    <a href="<?php echo esc_url($slider_btn_2_url);?>" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight"><?php echo $slider_btn_2_text;?></a>
                                <?php
                                    }
                                ?>
                                
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <?php
                    }
                    wp_reset_postdata();
                }
            ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><?php echo esc_html__('Previous', ' startup');?></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><?php echo esc_html__('Next', ' startup');?></span>
            </button>
        </div>
    </div>
    </div>
    <!-- Navbar & Carousel End -->

    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <?php
                    if(class_exists('ACF')) {
                        $i = 0;
                        $counters = get_field('counters', 'options');
                        foreach($counters as $counter) {
                        $i++;
                    ?>
                        <div class="col-lg-4 wow <?php echo esc_attr($counter['counter_animation']);?>" data-wow-delay="<?php echo esc_attr($counter['counter_delay']);?>">
                            <div class="<?php if(($i % 2) == 0 ) {echo 'bg-light';} else {echo 'bg-primary';}?> shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                                <div class="<?php if(($i % 2) == 0 ) {echo 'bg-primary';} else {echo 'bg-white';}?> d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                                    <i class="<?php echo esc_attr($counter['counter_icon']);?> <?php if(($i % 2) == 0 ) {echo 'text-white';} else {echo 'text-primary';}?>"></i>
                                </div>
                                <div class="ps-4">
                                    <h5 class="<?php if(($i % 2) == 0 ) {echo 'text-primary';} else {echo 'text-white';}?> mb-0"><?php echo $counter['counter_title'];?></h5>
                                    <h1 class="<?php if(($i % 2) == 0 ) {echo 'text-black';} else {echo 'text-white';}?> mb-0" data-toggle="counter-up"><?php echo $counter['counter_number'];?></h1>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                ?>
               
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <?php get_template_part( 'template-parts/content', 'about' ); ?>

    <?php get_template_part( 'template-parts/content', 'features' ); ?>
    
    <?php get_template_part( 'template-parts/content', 'service' ); ?>
    
    <?php get_template_part( 'template-parts/content', 'price' ); ?>

    <?php get_template_part( 'template-parts/content', 'quote' ); ?>

    <?php get_template_part( 'template-parts/content', 'testimonial' ); ?>

    <?php get_template_part( 'template-parts/content', 'team' ); ?>

    <?php get_template_part( 'template-parts/content', 'blog' ); ?>

<?php get_footer();?>