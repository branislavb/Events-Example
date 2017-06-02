<?php
/**
 * The Archive Event List
 *
 * 
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
                     <p>Start Date: <?php echo date( 'F d, Y', $event_start_date ); ?> </p>
                    <p>End Date: <?php echo date( 'F d, Y', $event_end_date ); ?> </p>
                    <p>Event author: <strong><?php the_author(); ?></strong></p>
                </div>
                </div>

            <?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
