<?php
/*
Template Name: Home
Description: A custom home page template for displaying a custom layout.
*/
get_header();
?>

<main>
    <!-- main Slider -->
<div id="carouselmain" class="carousel slide mb-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php
    $args = [
        'post_type' => 'mainslider', // Change to a custom post type if needed
        'posts_per_page' => 5, // Number of slides
    ];
    $carousel_query = new WP_Query($args);
    $is_active = true; // To set the first item as active
    if ($carousel_query->have_posts()) :
        while ($carousel_query->have_posts()) : $carousel_query->the_post();
            ?>
            <div class="carousel-item <?php echo $is_active ? 'active' : ''; ?>" data-bs-interval="5000">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('main-slider'); ?>" class="d-block w-100 " alt="<?php the_title(); ?>">
                <?php endif; ?>
            </div>
            <?php
            $is_active = false; // After the first item, set this to false
        endwhile;
        wp_reset_postdata();
    else :
        echo '<div class="carousel-item active"><p>No posts found.</p></div>';
    endif;
    ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselmain" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselmain" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Home Page Content -->
<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <!--   Home Content   -->
            <div class="col-sm-12 col-md-8">
                    <!-- Home Slider -->
<div id="carouselhome" class="carousel slide" data-bs-ride="carousel" data-bs-interval="100" data-bs-wrap="true">
  <div class="carousel-inner">
    <?php
    $args = [
        'post_type' => 'homesliderpost', 
        'posts_per_page' => 6, 
    ];
    $carousel_query = new WP_Query($args);
    $is_active = true; // To set the first item as active
    $count = 0; // Counter to group slides
    if ($carousel_query->have_posts()) :
        while ($carousel_query->have_posts()) : $carousel_query->the_post();
            if ($count % 3 === 0): // Start a new group every 3 posts
                ?>
                <div class="carousel-item <?php echo $is_active ? 'active' : ''; ?>" data-bs-interval="5000">
                  <div class="row">
            <?php
            endif;
            ?>
                    <div class="col-md-4 d-flex justify-content-center">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="d-block w-100 home-slider" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
            <?php
            $count++;
            if ($count % 3 === 0 || $count === $carousel_query->post_count): // Close the group
                ?>
                  </div>
                </div>
                <?php
                $is_active = false; // After the first item, set this to false
            endif;
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselhome" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselhome" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>  
<div class = home-slider-end></div>  

<!-- home post content -->
<?php
$arg = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 5,
));
?>

<div class="container">
    <div class="row justify-content-center ">
        <?php
        if ($arg->have_posts()) {
            while ($arg->have_posts()) {
                $arg->the_post();
        ?>
            <div class="col-12 col-md-3 card p-0 post-card <?php echo ($arg->  current_post >= 3)? 'large-card':""?> <?php echo ($arg-> current_post >=4)? 'large-card-2':""?>">
                <div class="card-body p-0 post-card-body ">
                    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="card-img-top  post-card-img" alt="<?php the_title(); ?>">
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
</div>

<?php wp_reset_postdata(); ?>
            <!--   Sider bar   -->
            <div class="col-sm-12 col-md-4 mt-5">
                    <?php get_sidebar(  )?>
            </div>
        </div>
    </div>
</div>
</main>

<?php
get_footer();
?>
