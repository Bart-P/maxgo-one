<?php if (carbon_get_post_meta(get_queried_object_id(), 'crb_product_show')): ?>
	<div class="w-[100vw] bg-light">
		<div class="container w-full h-full">
            <div class="text-center py-10">
                <h1 class="text-3xl pt-10">
                    <?php echo carbon_get_post_meta(get_queried_object_id(), 'crb_product_title') ?>
                </h1>
                <p class="text-lg text-gray pb-10">
                    <?php echo carbon_get_post_meta(get_queried_object_id(), 'crb_product_description') ?>
                </p>
            </div>
            <div class="grid grid-cols-7 grid-rows-3 h-full mb-10 text-xl leading-loose">
                <div class="text-center w-full h-full row-start-1 row-span-2 col-start-3 col-span-3">
                    <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta(get_queried_object_id(), 'crb_product_image'), 'big') ?>"
                         class="object-center object-cover"
                         alt="">
                </div>
                <div class="text-center my-auto col-start-1 col-span-2 space-y-5 max-w-[300px]">
                    <div class="text-primary">
                        <i class="fa-solid fa-plug-circle-bolt text-3xl"></i>
                    </div>
                    <p class="px-10">
                        <?php echo carbon_get_post_meta(get_queried_object_id(), 'crb_product_bullet1') ?>
                    </p>
                </div>
                <div class="text-center my-auto col-span-2 space-y-5 max-w-[300px]">
                    <div class="text-primary">
                        <i class="fa-solid fa-person-digging text-3xl"></i>
                    </div>
                    <p class="px-10">
                        <?php echo carbon_get_post_meta(get_queried_object_id(), 'crb_product_bullet3') ?>
                    </p>
                </div>
                <div class="text-center my-auto col-span-2 space-y-5 max-w-[300px]">
                    <div class="text-primary">
                        <i class="fa-solid fa-shield-halved text-3xl"></i>
                    </div>
                    <p class="px-10">
                        <?php echo carbon_get_post_meta(get_queried_object_id(), 'crb_product_bullet2') ?>
                    </p>
                </div>
                <div class="text-center my-auto col-span-2 space-y-5 max-w-[300px]">
                    <div class="text-primary">
                        <i class="fa-solid fa-ruler text-3xl"></i>
                    </div>
                    <p class="px-10">
                        <?php echo carbon_get_post_meta(get_queried_object_id(), 'crb_product_bullet4') ?>
                    </p>
                </div>
                <div class="text-center my-auto mx-auto col-start-3 col-span-3 text-center space-y-5 max-w-[300px]">
                        <div class="text-primary">
                            <i class="fa-solid fa-hammer text-3xl"></i>
                        </div>
                        <p class="px-10">
                            <?php echo carbon_get_post_meta(get_queried_object_id(), 'crb_product_bullet5') ?>
                        </p>
                </div>
            </div>
		</div>
	</div>
<?php endif; ?>