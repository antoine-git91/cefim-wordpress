<?php
get_header();
require_once('parts/nav-home.php');
?>
<main class="main-students">
    <section>
        <div class="container">
            <div class="container-content-text content-article">
                <?php $content_archive = get_field('students_archive_page', 'option');?>
                <?php if($content_archive): ?>
                    <?php if($content_archive['page_title']): ?>
                        <h1><?= $content_archive['page_title'] ?></h1>
                    <?php endif; ?>
                    <?php if($content_archive['page_content']): ?>
                        <p><?= $content_archive['page_content'] ?></p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
                <?php

                if(have_posts()):?>
                    <div class="grid-student">
                    <?php while(have_posts()):
                        the_post();
                        include "parts/avatar-profile.php";
                    endwhile;?>
               <?php endif;

                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <section>
        <?php the_posts_pagination( array(
                                        'prev_text' => __( '<<', 'textdomain' ),
                                        'next_text' => __( '>>', 'textdomain' ),
                                    ) ); ?>
    </section>
</main>
<?php
get_footer();
?>