  <!-- header 3 -->
  <div class="container-fluid py-0 px-0 header-3 " style="display: <?php echo get_theme_mod('adidas_show_header_3', false) ? 'block' : 'none'; ?>; ">
            <div class="row justify-content-between  align-items-center  mx-0 py-0 ">

                <div class="col-8 align-self-center">
                <h2 class="header-page-title d-flex justify-content-center ">
                    <?php 
                    if (is_page()) { 
                        the_title(); 
                    } elseif (is_single()) {
                        the_title(); 
                    } else {
                        the_title(); 
                    } 
                    ?>
                </h2>
                </div>
                <div class="col-4 d-flex justify-content-end header-3-logo mx-0 py-0   ">
                    <div class="header-3-logo-container px-4">
                        <?php the_custom_logo( )?>
                    </div>
                </div>
        </div>
    </div>
    <!-- header 3 end -->