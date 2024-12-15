<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo( 'name' ) . " | " . get_the_title(); ?>
    </title>
    <?php wp_head(  )?>
</head>
<body>
<header class="header">
    <!-- header 1 -->
        <?php get_template_part( 'templates-parts/header/header-1' );?>
    <!-- header 1 end -->
    <!-- header 2 -->
    <?php get_template_part( 'templates-parts/header/header-2' );?>
    <!-- header 2 end -->
    <!-- header 3 -->
<?php get_template_part( 'templates-parts/header/header-3' );?>
    <!-- header 3 end -->
    
</header>