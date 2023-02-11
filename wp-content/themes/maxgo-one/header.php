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
<div class="bg-white text-secondary pb-3 pt-5 border-b-2 border-light">
    <nav class="container flex justify-between align-middle">
        <a href="/maxgo">
                 <?php
                 if(has_custom_logo()):
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                 ?>
                     <img src="<?php echo esc_url($logo[0]) ?>"
                          alt="maxgo"
                          class="max-h-[30px]">

                <?php
                 else:
                     echo 'maxgo';
                 endif;?>
        </a>
        <?php
        // need to still figure out how to access the current page to make the text bold.
        wp_nav_menu(
            array(
                'theme_location' => 'top-navigation',
                'menu_class' => 'flex gap-6',
                'container' => 'ul',
                'link_before' => '<span class="hover:text-primary hover:border-b-2 uppercase">',
                'link_after' => '</span>'
            )
        );
        ?>
    </nav>
</div>