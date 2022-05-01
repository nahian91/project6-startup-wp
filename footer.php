<!-- Vendor Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/vendor-1.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/vendor-2.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/vendor-3.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/vendor-4.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/vendor-5.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/vendor-6.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/vendor-7.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/vendor-8.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Startup</h1>
                        </a>
                        <p class="mt-3 mb-4">Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet eos sit. Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet et kasd eos duo.</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form>
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
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    <?php wp_footer();?>
</body>

</html>