<header>
    <nav id="main-nav" aria-label="menu du site">
        <div class="container nav-content">
            <?php if(is_front_page()): ?>
                <div class="logo">
                    <p><abbr title="Développeur Web et Web Mobile">DWWM</abbr></p>
                </div>
            <?php else: ?>
                <div class="logo">
                    <a href="<?= get_home_url(); ?>"><abbr title="Développeur Web et Web Mobile">DWWM</abbr></a>
                </div>
            <?php endif; ?>
            <!-- MOBILE BUTTON HOME-->
            <button id="toggle-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- END MOBILE BUTTON HOME-->
            <div class="main-menus">
                <?php wp_nav_menu( array(
                                       'theme_location' => 'main',
                                       'container' => 'ul',
                                       'menu_class' => 'menu'
                                   ) ); ?>

                <?php
                wp_nav_menu(array(
                                'theme_location' => 'social',
                                'menu_class' => 'social',
                                'container_class' => 'social',
                                'link_before' => '<span class="screen-reader-text">',
                                'link_after' => '</span>'
                            ));
                ?>
            </div>
        </div>
    </nav>
</header>