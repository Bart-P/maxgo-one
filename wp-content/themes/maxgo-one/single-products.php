<?php get_header() ?>

<?php get_template_part('includes/section', 'banner') ?>
<?php get_template_part('includes/section', 'product') ?>
<div class="my-10 py-10 flex justify-between gap-8 container">
    <div class="page-content basis-3/5">
        <h2 class="text-2xl uppercase font-bold mb-8">
            <?php the_title() ?>
        </h2>
        <?php get_template_part('includes/section', 'content') ?>
    </div>
    <?php if (carbon_get_post_meta(get_queried_object_id(), 'crb_tech_details')):
        $details_list = carbon_get_post_meta(get_queried_object_id(), 'crb_tech_details');
    ?>
    <div class="basis-2/5">
        <h3 class="text-2xl uppercase font-bold mb-4">Technische Daten</h3>

        <table class="table-auto">
            <?php foreach ($details_list as $detail): ?>
                <tr class="border-b-2 border-light">
                    <th class="text-start uppercase">
                        <?php echo $detail['crb_tech_title'] ?>
                    </th>
                    <td class="px-6 py-4">
                        <?php echo $detail['crb_tech_description'] ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
    <?php endif; ?>
</div>

<?php get_footer() ?>