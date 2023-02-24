<?php if (carbon_get_post_meta(get_queried_object_id(), 'crb_product_show')): ?>
	<div class="fp-banner h-[80vh] w-[100vw] z-10 bg-light" style="background-image: url(<?php echo wp_get_attachment_image_url(carbon_get_post_meta(get_queried_object_id(), 'crb_banner_image'), 'big') ?>)">
		<div class="container w-[100%] h-[100%]">
            <div class="grid grid-cols-5 grid-rows-4 h-full">
                <div class="border-2 border-dark col-span-5 text-center text-3xl">Das ist das Heading</div>
                <div class="border-2 border-dark">bullet 1</div>
                <div class="border-2 border-dark grid-start-2 col-span-3 row-span-2">bild</div>
                <div class="border-2 border-dark">bullet 2</div>
                <div class="border-2 border-dark">bullet 3</div>
                <div class="border-2 border-dark">bullet 4</div>
                <div class="border-2 border-dark col-span-5 text-center">bullet 5</div>
            </div>
		</div>
	</div>
<?php endif; ?>