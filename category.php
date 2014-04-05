<?php get_header(); ?>

	<div class="category-results">
	
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2>Showing all posts in the category: &#8216;<?php single_cat_title(); ?>&#8217;</h2>
			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>Posts tagged with: &#8216;<?php single_tag_title(); ?>&#8217;</h2>
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archive for <?php the_time('F jS, Y'); ?>:</h2>
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archive for <?php the_time('F, Y'); ?>:</h2>
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2>Archive for <?php the_time('Y'); ?>:</h2>
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2>Author Archive</h2>
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2>Blog Archives</h2>
		<?php } ?>
	
		
		
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
 
<?php global $post; ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>
<div class="post_container" style="background: url(<?php echo $src[0]; ?> ) !important;">



<div class="post_container_date">

<div class="post-411">
	<div class="author-picture"> <?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?> </div>
	<div class="author-name"> By <?php the_author() ?> </div>
	<div class="date-411"> 
		<h3 class="day-num"> <?php the_time('d') ?> </h3> <!-- numerical day, with leading zero 01 - 24 for example -->
		<h3 class="month-year"> <?php the_time('M Y') ?> </h3> <!-- Month abbrev. and year -->
		<h3 class="day-name"> <?php the_time('l') ?> </h3> <!-- day name -->
	</div>
	
	
</div>
</div>

<div class="post_container_titles"><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a>
</div>
</div> <!-- END POST BOX FOR INDEX -->



<?php endwhile; ?>
 
<?php else: //If no posts are present ?>
<div class="post-inner">
<h2><?php _e( 'Dang :( We could not find what you were looking for.', 'Radcircle' ); ?></h2>
</div>
<?php endif; ?>
	</div>

	<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>

<?php get_footer(); ?>