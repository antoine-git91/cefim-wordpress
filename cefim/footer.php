    <footer>
        <div class="footer-content container">
                <address>
                    <span class="role">Développeur Web et Web Mobile</span></br>
                    <span class="school-name">CEFIM</span></br>
                    <a href="<?php the_field('link_address', 'option') ?>" class="street"><?php the_field('address', 'option') ?></a></br>

                    <?php
                    $phone= get_field('number_phone', 'option');
                    $phone = str_replace(' ', '', $phone);
                    $phoneLink = '+33' . substr($phone, '1');


                    $phoneText = wordwrap($phone, 2, ' ', true);
                    ?>
                    <a href="tel:<?= $phoneLink ?>">Tel: <?= $phoneText ?></a>
                </address>
            <?php
            wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'container_class' => 'nav-footer',
                            'container' => 'nav',
                        ));
            ?>

            <?php
            wp_nav_menu(array(
                            'theme_location' => 'social',
                            'menu_class' => 'social',
                            'container' => 'nav',
                            'link_before' => '<span class="screen-reader-text">',
                            'link_after' => '</span>'
                        ));
            ?>
            </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>