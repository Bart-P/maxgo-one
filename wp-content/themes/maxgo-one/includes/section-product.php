<?php if (carbon_get_post_meta(get_queried_object_id(), 'crb_product_show')): ?>
	<div class="fp-banner h-[80vh] w-[100vw] z-10 bg-light">
		<div class="container w-full h-full">
            <div class="border-2 border-dark text-center text-3xl py-10">Das ist das Heading</div>
            <div class="grid grid-cols-7 grid-rows-3 h-full mb-10">
                <div class="border-2 border-dark row-start-1 row-span-2 col-start-3 col-span-3">bild</div>
                <div class="border-2 border-dark col-start-1 col-span-2">bullet 1</div>
                <div class="border-2 border-dark col-span-2">bullet 3</div>
                <div class="border-2 border-dark col-start-1 col-span-2">bullet 2</div>
                <div class="border-2 border-dark col-span-2">bullet 4</div>
                <div class="border-2 border-dark col-start-3 col-span-3 text-center">bullet 5</div>
            </div>
		</div>
	</div>
<?php endif; ?>