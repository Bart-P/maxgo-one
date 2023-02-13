<?php if( have_posts() ): while (have_posts()): the_post() ?>
	<div class="container">
		<div>
			<?php the_content(); ?>
		</div>
	</div>
<?php endwhile; endif; ?>