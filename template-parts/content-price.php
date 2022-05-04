<!-- Pricing Plan Start -->

<?php
    if(class_exists('ACF')) {
        $price_subtitle = get_field('price_subtitle', 'options');
    $price_title = get_field('price_title', 'options');
?>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $price_subtitle;?></h5>
                <h1 class="mb-0"><?php echo $price_title;?></h1>
            </div>
            <div class="row g-0">
                

            <?php
                $args = array(
                    'post_type' => 'price',
                    'posts_per_page' => 3
                );
                $query = new WP_Query($args);
                $i = 0;
                if($query->have_Posts()) {
                    while($query->have_posts()) {
                        $query->the_post();
                        $i++;

                        $price_tagline = get_field('price_tagline');
                        $price_currency = get_field('price_currency');
                        $price_amount = get_field('price_amount');
                        $price_range = get_field('price_range');
                        $price_features = get_field('price_feature');
                        $price_btn_text = get_field('price_btn_text');
                        $price_btn_url = get_field('price_btn_url');
                    ?>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="<?php if(($i % 2) == 0) {echo 'bg-white rounded shadow position-relative';} else {echo'bg-light rounded';} ?>">
                            <div class="border-bottom py-4 px-5 mb-4">
                                <h4 class="text-primary mb-1"><?php the_title();?></h4>
                                <small class="text-uppercase"><?php echo $price_tagline;?></small>
                            </div>
                            <div class="p-5 pt-0">
                                <h1 class="display-5 mb-3">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;"><?php echo  $price_currency['value'];?></small><?php echo $price_amount;?><small
                                        class="align-bottom" style="font-size: 16px; line-height: 40px;">/ <?php echo  $price_range['label'];?></small>
                                </h1>
                                <?php
                                    foreach($price_features as $feature) {
                                ?>
                                        <div class="d-flex justify-content-between mb-3"><span><?php echo $feature['price_feature_title'];?></span><i class="<?php if($feature['price_feature_active']['value'] == 'hide' ) {echo 'fa fa-times text-danger';} else {echo 'fa fa-check text-primary';} ?> pt-1"></i></div>
                                <?php
                                    }
                                ?>
                                
                                <a href="<?php echo esc_url($price_btn_url);?>" class="btn btn-primary py-2 px-4 mt-4"><?php echo $price_btn_text;?></a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    wp_reset_postdata();
                }
            ?>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->
    <?php
    }