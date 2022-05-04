
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
                <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
            </div>
            <div class="row g-5">

            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => '3'
                );
                $query = new WP_Query($args);
                if($query->have_posts()) {
                    while($query->have_posts()) {
                        $query->the_post();
                        	
                        $author_id = get_the_author_meta( 'ID' ); 
                        $author_name = get_the_author_meta( 'display_name', $author_id );                          	
                        $post_date = get_the_date( 'F j, Y' );
                        $cats = get_the_category();
                    ?>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="<?php esc_url(the_post_thumbnail_url());?>" alt="<?php esc_attr(the_title());?>">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php echo $cats[0]->name;?></a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i><?php echo $author_name;?></small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $post_date;?></small>
                                </div>
                                <h4 class="mb-3"><?php the_title();?></h4>
                                <p><?php the_excerpt(); ?></p>
                                <a class="text-uppercase" href="<?php esc_url(the_permalink());?>">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
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
    <!-- Blog Start -->