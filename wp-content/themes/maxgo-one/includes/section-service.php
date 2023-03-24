<div class="container flex h-[70vh] mt-10 gap-6">
    <div class="basis-1/2 p-4 space-y-8 my-auto">
        <h1 class="text-4xl font-bold"><?php echo carbon_get_post_meta(get_queried_object_id(), 'crb_service_title') ?></h1>
        <p class="text-xl">
            <?php echo carbon_get_post_meta(get_queried_object_id(), 'crb_service_short') ?>
        </p>
        <button class="btn btn-big btn-primary">Fragen Sie uns An!</button>
    </div>
	<div class="basis-1/2 grid grid-cols-2 grid-rows-2 gap-6 p-2">
        <?php foreach (carbon_get_post_meta(get_queried_object_id(), 'crb_service_bullets') as $index=>$bullet): ?>

		<div class="flex flex-col gap-3 justify-center items-center text-center bg-light rounded-md shadow-md p-4">
            <div class="bg-primary rounded-full">
                <?php if ($index === 0): ?>
                <i class="fa-solid fa-robot text-white p-2 text-xl"></i>
                <?php elseif ($index === 1): ?>
                <i class="fa-solid fa-warehouse text-white p-2 text-xl"></i>
                <?php elseif ($index === 2): ?>
                <i class="fa-solid fa-gauge-high text-white p-2 text-xl"></i>
                <?php elseif ($index === 3): ?>
                <i class="fa-solid fa-ruler-combined text-white p-2 text-xl"></i>
                <?php endif; ?>
            </div>
            <h3 class="text-xl font-bold"><?php echo $bullet['crb_service_bullet_header'] ?></h3>
            <p><?php echo $bullet['crb_service_bullet_description'] ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</div>