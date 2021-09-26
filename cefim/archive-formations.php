<?php
/* Template Name: formations */
get_header();
require_once('parts/nav-home.php');
?>
<main>
    <section>
        <div class="container">
            <div class="container-content-text content-article">
                <?php $content_archive = get_field('formation_archive_page', 'option');?>
                <?php if($content_archive): ?>
                    <?php if($content_archive['page_title']): ?>
                        <h1><?= $content_archive['page_title'] ?></h1>
                    <?php endif; ?>
                    <?php if($content_archive['page_content']): ?>
                        <p><?= $content_archive['page_content'] ?></p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="grid-module">
               <?php if(have_posts()):
                    while(have_posts()):
                        the_post();
                        include "parts/card-module.php";
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
    <?php the_posts_pagination( array(
                                    'prev_text' => __( '<<', 'textdomain' ),
                                    'next_text' => __( '>>', 'textdomain' ),
                                ) ); ?>
    <section>

    </section>
</main>
<?php
get_footer();
?>