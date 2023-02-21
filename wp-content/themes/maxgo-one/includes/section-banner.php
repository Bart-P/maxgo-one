<?php if (carbon_get_post_meta(get_queried_object_id(), 'crb_banner_image')): ?>
<div class="fp-banner h-[70vh] w-[100vw] z-10" style="background-image: url(<?php echo wp_get_attachment_image_url(carbon_get_post_meta(get_queried_object_id(), 'crb_banner_image'), 'big') ?>)">
	<div class="container w-[100%] h-[100%] flex justify-center items-center text-light z-50">
		<div class="text-center">
			<h1 class="align-end uppercase text-5xl font-bold mb-5">
				<?php echo carbon_get_post_meta(get_queried_object_id(), 'crb_banner_title') ?>
			</h1>
			<p class="text-2xl">
				<?php echo carbon_get_post_meta(get_queried_object_id(), 'crb_banner_description') ?>
			</p>
		</div>
	</div>
</div>
<?php endif; ?>