<?php if( have_posts() ): while (have_posts()): the_post() ?>
	<div class="container my-10 py-10">
		<div>
			<?php the_content(); ?>
		</div>
	</div>
<?php endwhile; endif; ?>