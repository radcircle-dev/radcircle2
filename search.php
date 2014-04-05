<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;


get_header(); ?>



<div id="search-results">
 <?php if ( have_posts() ) : ?>
                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header><!-- .page-header -->


                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'search' ); ?>

                <?php endwhile; ?>


            <?php else : ?>
<h2><?php _e( 'Sorry, nothing to display.', 'Radcircle' ); ?></h2>

            <?php endif; ?>
</div>

  <?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>















<?php get_footer(); ?>