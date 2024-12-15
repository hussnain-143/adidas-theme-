<?php
get_header(  );
?>

<section class="container-fluid single-post">
<div class="container">
    <div class="row justify-content-center ">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
            <div class="col-9 py-3 my-4 single-post-card ">
                <div class=" p-0 single-card-body">
                    <!-- Post Thumbnail -->
                    <div class="sngle-card-content-area">
                    <h1 class="single-card-title"><?php the_title(); ?></h1>
                    <p class="single-card-content"><?php the_content(); ?></p>
                    </div>

                </div>
            </div>
        <?php
       
            }
        } else {
            echo '<p>No posts found.</p>';
        }
        ?>
<div class="single-comment col-9 py-3 my-4">
<?php
if (comments_open() || get_comments_number()) {
    comments_template();
}
?>

</div>


    </div>
</div>

</section>
<?php
get_footer(  );
?>