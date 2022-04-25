<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Startup - Startup Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="<?php echo get_template_directory_uri();?>/assets/img/favicon.ico" rel="icon">

    <?php wp_head();?>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">

                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu'
                    ));
                ?>
                    <!-- <ul>
                        <li><a href="index.html" class="nav-item nav-link">Home</a></li>
                        <li><a href="about.html" class="nav-item nav-link">About</a></li>
                        <li><a href="service.html" class="nav-item nav-link">Services</a></li>
                        <li><a href="#" class="nav-item nav-link">Blog</a>
                            <ul>
                                <li><a href="blog.html">Blog Grid</a></li>
                                <li><a href="detail.html">Blog Detail</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="nav-item nav-link">Pages</a>
                            <ul>
                                <li><a href="price.html">Pricing Plan</a></li>
                                <li><a href="feature.html">Our features</a></li>
                                <li><a href="team.html">Team Members</a></li>
                                <li><a href="testimonial.html">Testimonial</a></li>
                                <li><a href="quote.html">Free Quote</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html" class="nav-item nav-link">Contact</a></li>
                    </ul>                     -->
                </div>
            </div>
        </nav>