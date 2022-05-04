<?php

/*
Template Name: Template Contact
*/

get_header();?>

<?php get_template_part( 'template-parts/content', 'breadcumb' );

if(class_exists('ACF')) {
    $contact_subtitle = get_field('contact_subtitle', 'options');
    $contact_title = get_field('contact_title', 'options');
    $contact_infos = get_field('contact_infos', 'options');
}

?>

    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <?php
                if(class_exists('ACF')) {
                ?>
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $contact_subtitle;?></h5>
                <h1 class="mb-0"><?php echo $contact_title;?></h1>
            </div>
            <?php
                }
            ?>
            <div class="row g-5 mb-5">
                <?php if(class_exists('ACF')) {
                    foreach($contact_infos as $info) {
                ?>
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                                <i class="<?php echo $info['conact_info_icon'];?> text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="mb-2"><?php echo $info['contact_info_subtitle'];?></h5>
                                <h4 class="text-primary mb-0"><?php echo $info['contact_info_title'];?></h4>
                            </div>
                        </div>
                    </div>
                <?php
                    }
               
                }
            ?>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <?php echo do_shortcode('[contact-form-7 id="228" title="Contact Form"]');?>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php get_footer();?>