<?php
/**
 * Template Name: Display Homes 
 */
?>

<?php get_header(); ?>


<?php 
// правим си куери за пейджовете
$homes_args = array(
    'post_type'      => 'home',
    'post_status'    => 'publish',
    'posts_per_page' => 10,
    'orderby'        => 'date',
    'order'          => 'ASC'
);

// направихме си едно къстъм WPQUERY, което приема тези аргументи: $homes_args
$homes_query = new WP_Query( $homes_args );
// var_dump($homes_query);
?>

<!-- Правим си проверка за ако има постове, и докато има постове  -->
<?php 
    if ( have_posts()) {
        while (have_posts()){
            // Вика постове    
            the_post();
            
            // Показва съдържанието на пейдж темплейта
            the_content();
        }
    }
?>
<ul class="homes-listing">
	
<!-- в провеката си слагаме: $homes_query->have_posts -->
	<?php if ($homes_query->have_posts()): ?>
		<?php while ($homes_query->have_posts()): $homes_query->the_post(); ?>
		<!-- content -->
		
		<!-- call template-part home-item, 'template-parts/home', 'item', template-parts is name of folder -->
		<?php get_template_part( 'template-parts/home', 'item' )?>

	<?php endwhile; ?>

	<?php posts_nav_link(); ?>
<?php endif; ?>

<!-- Слагаме този ресет, за да не бърникаме из другите лупове на WP -->
<?php wp_reset_postdata(); ?>

</ul>

<?php get_footer(); ?>