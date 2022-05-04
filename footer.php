<!-- Vendor Start -->
<?php
    if(class_exists('ACF')) {
?>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <?php
                        $client_carousels = get_field('client_carousels', 'options');
                        foreach($client_carousels as $logo) {
                    ?>
                        <img src="<?php echo $logo['client_logo']['url'];?>" alt="">
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>
    <!-- Vendor End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <?php
                            if(class_exists('ACF')) {
                                $footer_logo = get_field('footer_logo', 'options');
                            $footer_description = get_field('footer_description', 'options');
                            $footer_subcription = get_field('footer_subcription', 'options');
                        ?>
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><img src="<?php echo $footer_logo;?>" alt=""></h1>
                        </a>
                        <p class="mt-3 mb-4"><?php echo $footer_description;?></p>
                        
                        <?php echo do_shortcode(".$footer_subcription.");
                            }
                        ?>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <?php
                                if(is_active_sidebar('footer-address')) {
                                    dynamic_sidebar('footer-address');
                                }
                            ?>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <?php
                                if(is_active_sidebar('footer-1')) {
                                    dynamic_sidebar('footer-1');
                                }
                            ?>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <?php
                                if(is_active_sidebar('footer-2')) {
                                    dynamic_sidebar('footer-2');
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <?php
                            if(class_exists('ACF')) {
                                $footer_copyright = get_field('footer_copyright', 'options');
                            echo $footer_copyright;
                            }    
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="fa fa-arrow-up"></i></a>
    <?php wp_footer();?>
</body>

</html>