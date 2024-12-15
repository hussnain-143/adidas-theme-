 <!-- header 2 -->
 <div class="container-fluid header-2 p-0 m-0">
        <div class="container ">
            <div class="row justify-content-between  align-items-center  ">
                <nav class="col-7 align-items-center  header-menu">
              <?php wp_nav_menu()?>
                </nav>
                <div class="col-5 d-flex justify-content-end header-sidebar   ">

                  <?php
                  dynamic_sidebar( 'header-sidebar' );
                  ?>
                </div>
            </div>
        </div>
    </div>
    <!-- header 2 end -->