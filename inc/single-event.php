<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
        <?php
        $args = array('post_type' => 'event');
        $query = new WP_Query($args);
        while($query -> have_posts()) : $query -> the_post();
        ?>
        
		
                <div class="main-post-div">
                <div class="single-page-post-heading">
                <h1><a href="<?php the_permalink(); ?>" class="uep_event_title"><?php the_title(); ?></a></h1>
                </div>
                <div class="content-here">
                <?php  the_excerpt();  ?>
                </div>
                   <?php  the_meta();  ?> 
                </div>
                </div>

            <?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
