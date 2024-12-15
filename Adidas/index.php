<?php
get_header(  );
?>

<section class="container-fluid main-post">
<div class="container">
    <div class="row justify-content-center ">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
            <div class="col-12 col-md-6 card p-0 m-2 post-card ">
                <div class="card-body p-0 post-card-body">
                    <!-- Post Thumbnail -->
                    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top  post-card-img" alt="<?php the_title(); ?>">
                    <div class="post-card-text-area">
                    <h2 class="post-card-title"><?php the_title(); ?></h2>
                    <p class="post-card-text"><?php the_excerpt(); ?></p>
                    </div>
                    <div class="post-card-btn d-flex justify-content-center ">
                        <a href="<?php the_permalink(); ?>" class="post-btn">Read More</a>
                    </div>
                </div>
            </div>
        <?php
            }
        } else {
            echo '<p>No posts found.</p>';
        }
        ?>
    </div>
</div>

</section>
<?php
get_footer(  );
?>