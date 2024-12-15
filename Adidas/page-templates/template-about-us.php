<?php
/*
Template Name: About Us


*/
get_header( );
?>
<main class="about-page">
<div class="container  p-5">
<?php
if(have_posts(  )){
    while(have_posts(  )){
        the_post();
?>
<div class="about-post">
    <?php 
    the_content();
    ?>
</div>
<?php
    }
}
?>


</div>
</main>
<?php 
get_footer(  );
?>