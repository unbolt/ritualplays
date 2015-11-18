<?php
    // Template is called from within a loop and displays a post
?>
<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>

<div class="entry">
    <?php the_content(); ?>
</div>

<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>