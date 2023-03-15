<?php get_header() ?>

<?php get_template_part('includes/section', 'banner') ?>
<?php get_template_part('includes/section', 'product') ?>


	<div class="my-10 py-10 flex justify-between gap-8 container">
	<div class="page-content">
		<h2 class="text-2xl uppercase font-bold mb-8">
			<?php the_title() ?>
		</h2>
		<?php get_template_part('includes/section', 'content') ?>
	</div>
	</div>

<?php get_footer() ?>