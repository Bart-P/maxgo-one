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
<div class="bg-white text-secondary py-5 text-xl border-b-2 border-light">
    <nav class="container flex justify-between">
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
        <ul class="flex gap-6">
            <li><a href="" class="hover:text-primary hover:border-b-2 border-0 border-b-2">Start</a></li>
            <li><a href="" class="hover:text-primary hover:border-b-2">Über uns</a></li>
            <li><a href="" class="hover:text-primary hover:border-b-2">Leistungenspan</a></li>
            <li><a href="" class="hover:text-primary hover:border-b-2">Produkte</a></li>
            <li><a href="" class="hover:text-primary hover:border-b-2">Kontakt</a></li>
        </ul>
    </nav>
</div>