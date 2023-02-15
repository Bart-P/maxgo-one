<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>maxgo</title>
    <?php wp_head() ?>
</head>
<body>
<div class="bg-white text-secondary p-5 border-b-2 border-light">
    <nav class="container flex justify-between items-center">
        <a href="/maxgo" class="mt-1">
                 <?php
                 if(has_custom_logo()):
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                 ?>
                     <img src="<?php echo esc_url($logo[0]) ?>"
                          alt="maxgo"
                          class="max-h-[35px]">

                <?php
                 else:
                     echo 'maxgo';
                 endif;?>
        </a>
        <div class="flex gap-6">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'top-navigation',
                    'menu_class' => 'flex gap-6',
                    'container' => 'ul',
                    'link_before' => '<span class="text-dark hover:text-primary uppercase align-middle">',
                    'link_after' => '</span>'
                )
            );
            ?>
            <a href="" class="py-2 px-3 bg-dark text-light font-bold uppercase my-auto shadow-md hover:text-primary">Online Shop</a>
        </div>
    </nav>
</div>