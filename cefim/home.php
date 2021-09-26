<?php
get_header();
require_once("parts/nav-home.php");
?>
<main>
    <section>
        <div class="container">
            <div class="container-content-text content-article">
                <?php $content_archive = get_field('actuality_archive_page', 'option');?>
                <?php if($content_archive): ?>
                    <?php if($content_archive['page_title']): ?>
                        <h1><?= $content_archive['page_title'] ?></h1>
                    <?php endif; ?>
                    <?php if($content_archive['page_content']): ?>
                        <p><?= $content_archive['page_content'] ?></p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
                <?php if(have_posts()): ?>
                    <div class="grid-actuality">
                    <?php while(have_posts()): ?>
                        <?php the_post();?>
                        <?php include "parts/card-actuality.php"?>

                    <?php endwhile; ?>
                    </div>
            <?php the_posts_pagination( array(
                                            'prev_text' => __( '<<', 'textdomain' ),
                                            'next_text' => __( '>>', 'textdomain' ),
                                        ) ); ?>
            <?php endif ?>
        </div>
    </section>
</main>
<?php
    get_footer();
?>