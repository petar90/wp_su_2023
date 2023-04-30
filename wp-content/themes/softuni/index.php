<?php
get_header(); // Call the theme’s header.php file.
 

// Start “The Loop”
if ( have_posts() ) : // Does our website have any posts to  display?

?>
<section class="leading-inner-article">

    <?php
        while ( have_posts() ) : the_post() // If the answer is “yes”, let’s run some code.
    ?>
        <!-- call template-part job-item, 'template-parts/job', 'item', template-parts is name of folder -->
        <?php get_template_part( 'template-parts/property', 'item' )?>
    
    <?php
    endwhile; // There  are no more posts to display, let’s shut this down.
    ?>
        
    <?php posts_nav_link(); ?>
    
    
</section>

<?php
else : // If we don’t have any posts, let’s display a custom  message below.

    _e( 'Sorry, no  posts matched your criteria.', 'textdomain' );

endif; // OK, we can stop looking for posts now.


// End of “The Loop”

// get_sidebar(); // Call the theme’s sidebar.php file.

get_footer(); // Call the theme’s footer.php file.

