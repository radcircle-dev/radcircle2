<?php get_header(); ?>

<div class="page-container">

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>


</div>







 <?php edit_post_link('Edit', ' &#124; ', ''); ?>
			

<?php get_footer(); ?>