<?php get_header() ?>

<?php get_template_part('includes/section', 'banner') ?>

<div class="container my-10 py-10">
    <?php
        $card_page_ids_to_show = [];
        $section_page_ids_to_show = [];
        foreach (get_all_page_ids() as $id) {
            if(carbon_get_post_meta($id, 'crb_show_in_card_on_frontpage')) {
                $card_page_ids_to_show[] = $id;
            }

            if(carbon_get_post_meta($id, 'crb_show_in_section_on_frontpage')) {
                $section_page_ids_to_show[] = $id;
            }
        };
    ?>
    <?php if (count($card_page_ids_to_show) > 3): ?>
    <div class="grid grid-cols-3 gap-10 w-full">
    <?php else: ?>
    <div class="flex gap-10 w-full">
    <?php endif; ?>
    <?php foreach ($card_page_ids_to_show as $index=>$page_id): ?>
        <div class="flex flex-col justify-between base-1/3 bg-dark text-light p-8 w-full">
            <section>
                <h4 class="text-3xl uppercase"><?php echo carbon_get_post_meta($page_id, 'crb_short_title') ?></h4>
                <p class="my-10 text-xl">
                    <?php echo carbon_get_post_meta($page_id, 'crb_short_description') ?>
                </p>
            </section>
            <div>
                <a href="<?php echo get_page_link($page_id) ?>" class="bg-primary text-dark uppercase py-3 px-5 hover:bg-secondary hover:text-light">mehr</a>
            </div>
        </div>
    <?php endforeach; ?>
    </div>

</div>

<?php foreach ($section_page_ids_to_show as $index => $section_page_id): ?>
    <?php if(($index+1) & 1): ?>
    <div class="py-10 bg-light w-[100vw]">
        <section class="container py-10 flex gap-10">
            <div class="basis-2/5 py-5 my-auto">
                <h3 class="text-3xl uppercase font-dark font-bold"><?php echo carbon_get_post_meta($section_page_id, 'crb_short_title'); ?></h3>
                <p class="py-10 text-xl">
                    <?php echo carbon_get_post_meta($section_page_id, 'crb_short_description'); ?>
                </p>
                <a href="<?php echo get_page_link($section_page_id); ?>" class="bg-dark text-light text-xl py-3 px-5 uppercase hover:text-primary hover:bg-secondary shadow-md">mehr</a>
            </div>

            <div class="container basis-3/5 overflow-hidden">
                <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($section_page_id, 'crb_short_image'), 'big') ?>"
                     class="object-cover object-center"
                     alt="">
            </div>
        </section>
    </div>
    <?php else: ?>
        <div class="py-10 w-[100vw]">
            <section class="container py-10 flex gap-10">
                <div class="container basis-3/5 overflow-hidden">
                    <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($section_page_id, 'crb_short_image'), 'big') ?>"
                         class="object-cover object-center"
                         alt="">
                </div>

                <div class="basis-2/5 py-5 my-auto">
                    <h3 class="text-3xl uppercase font-dark font-bold"><?php echo carbon_get_post_meta($section_page_id, 'crb_short_title') ?></h3>
                    <p class="py-10 text-xl">
                        <?php echo carbon_get_post_meta($section_page_id, 'crb_short_description') ?>
                    </p>
                    <a href="<?php echo get_page_link($section_page_id); ?>" class="bg-dark text-light text-xl py-3 px-5 uppercase hover:text-primary hover:bg-secondary shadow-md">mehr</a>
                </div>
            </section>
        </div>
    <?php endif; ?>
<?php endforeach; ?>


<div class="text-dark py-10 my-10 flex flex-col justify-center items-center gap-10">
    <h4 class="text-3xl font-bold uppercase">Neugierig? Jetzt Kontaktieren!</h4>
    <button class="bg-primary text-2xl text-dark font-bold py-3 px-5 uppercase hover:text-light hover:bg-dark shadow-md">Kontakt</button>
</div>

<?php get_template_part('includes/section', 'content') ?>

<?php get_footer() ?>