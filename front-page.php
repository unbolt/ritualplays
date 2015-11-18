<?php
    get_header();

    if ( have_posts() ) : while ( have_posts() ) : the_post();

        // Get post template
            include('templates/post.php');

    endwhile; else :

        // Display error message
        ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php
    endif;

    get_footer();
?>