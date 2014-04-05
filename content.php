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