<footer>
    <div class="bg-dark text-light py-10">
        <div class="flex justify-evenly container">
            <ul class="flex flex-col gap-2">
                <li>maxgo GmbH</li>
                <li>Hufeisenstr. 8</li>
                <li>45525 Hattingen</li>
                <li>Deutschland</li>
                <li>Tel.: +49 2324 / 97703-01</li>
                <li>Fax: +49 2324 / 97703-69</li>
                <li>E-Mail: info@maxgo.eu</li>
            </ul>
            <div class="">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-navigation',
                        'menu_class' => 'flex flex-col gap-2',
                        'container' => 'ul',
                        'link_before' => '<span class="hover:text-primary hover:border-b-2">',
                        'link_after' => '</span>'
                    )
                );
                ?>
            </div>
            <div class="">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'legal-navigation',
                        'menu_class' => 'flex flex-col gap-2',
                        'container' => 'ul',
                        'link_before' => '<span class="hover:text-primary hover:border-b-2">',
                        'link_after' => '</span>'
                    )
                );
                ?>
            </div>
        </div>
    </div>

</footer>
<?php wp_footer() ?>
</body>
</html>