<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pointe
 */

get_header();
?>
<main id="primary" class="site-main">
	<div class="home-carousel">
	<?php echo do_shortcode("[image-carousel category='homepage-hero']");?>
	</div>
<div class="under-bar">

</div>
<div class="home-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
        <div class="entry">
            <?php the_content(); ?>
        </div><!-- entry -->
<?php endwhile; ?>
<?php endif; ?>
</div>
	</main>
<?php
get_footer();
