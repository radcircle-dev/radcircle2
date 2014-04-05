<?php get_header(); ?>

	<div id="main-content">


	<div id="randbox"><div class="attn center">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Radcircle - index main full width ad -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:90px"
     data-ad-client="ca-pub-9545787544514574"
     data-ad-slot="8921573154"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
	</div>

</div>

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
	
	
</div> <!-- end div for author picture and date on home page -->
</div>

<div class="post_container_titles"><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a>
</div>
</div> <!-- END POST BOX FOR INDEX -->



<?php endwhile; ?>
 
<?php else: //If no posts are present ?>
<article class="entry">
<div class="post-inner">
<h2><?php _e( 'Dang :( We could not find what you were looking for. Try going back to the homepage!', 'Radcircle' ); ?></h2>
</div>
</article>
<?php endif; ?>
	</div>

	<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>

<?php get_footer(); ?>