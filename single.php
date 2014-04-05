<div class="previous-post-left"><p class="previous-post-lr-title">Prev. Song</p><p class="previous-post-lr-arrow"><?php if(get_adjacent_post(false, '', false)) { echo ''; next_post_link('%link', '&laquo;'); }
else { echo '<span style="display:none">"'.get_the_title().'" is the latest post: no newer articles. </span>'; } ; ?></p> </div>
<div class="previous-post-right"><p class="previous-post-lr-title">Next Song</p><p class="previous-post-lr-arrow"><?php if(get_adjacent_post(false, '', true)) { echo ''; previous_post_link('%link', '&raquo;'); }
else { echo '<span style="display:none">"'.get_the_title().'" is the latest post: no newer articles. </span>'; } ; ?></p> </div>
<?php get_header(); ?>



	<div id="post-container">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<div class="post">
			<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<p class="post-title-details">Posted <span class="title-details-bold"><?php the_time('l, F jS, Y') ?></span> by <span class="author-names title-details-bold"><?php the_author(', ') ?></span></p>
			<div class="post-title-share">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=undefined"></script>
<!-- AddThis Button END -->
</div>

		
		<div class="post-entry">	
			<?php the_content(); ?>
		</div>

				<div class="other-songs"><p>Discover more rad music right below.</p></div>
				<div class="previous-or-next">
					<div class="previous-post"><p><?php previous_post_link('%link', '%title', TRUE); ?></p></div>
					<div class="next-post"><p><?php next_post_link('%link', '%title', TRUE); ?></p></div>
				</div>

			<div class="visual-info-box">
				<div class="visual-info-box-img"><?php the_post_thumbnail(); ?></div>
			<!--	<div class="visual-info-box-cats"><?php $key_1_values = get_post_meta(76, 'key_1'); ?></div> -->
				<div class="visual-info-box-cats"><p class="visual-info-box-titles">Categories:</p> <?php echo get_the_category_list(); ?></div>
				<div class="visual-info-box-tags">
				<p class="visual-info-box-titles">Post Tags:</p>
					<?php
					if(get_the_tag_list()) {
    					echo get_the_tag_list('<ul class="post-categories"><li>','</li><li>','</li></ul>');
					}
					?></div>
				



			</div>

			
<!--
			<div class="comments-template">
				<h2>What do you think? Rad or bad?</h2>
					<?php comments_template(); ?>
			</div>-->

	</div>

<?php endwhile; ?>
	
	

<?php endif; ?>
</div>

<?php get_footer(); ?>