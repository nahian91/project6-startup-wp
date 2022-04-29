<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">
                <?php
                    if(is_category()) {
                        the_archive_title();
                    } else {
                        single_post_title();
                    }
                ?>
            </h1>
            <a href="<?php echo site_url();?>" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">
                <?php
                    if(is_category()) {
                        the_archive_title();
                    } elseif(is_page('blog')) {
                        single_post_title();
                    } else {
                        the_title();
                    }
                ?></a>
        </div>
    </div>
</div>