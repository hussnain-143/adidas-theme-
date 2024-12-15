<div class="container comment-form">
        <?php comment_form(); ?>
    </div>
    <div class="container comment-list">
        <?php 
        if (have_comments()) { 
            wp_list_comments(); 
        } else {
            echo "<p>No comments yet. Be the first to comment!</p>";
        }
        ?>
    </div>