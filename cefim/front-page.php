<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php require_once('parts/nav-home.php') ?>
<main class="main-home">
    <?php
    $image = get_field('background_hero');

    if( $image ): ?>
    <section class="hero" style="background-image: url('<?= $image ?>')">
    <?php endif; ?>
        <div class="container">
            <div class="cta-hero">
                <h1><?= the_field('hero_title') ?></h1>
                <a href="<?= the_field('redirect_cta')?>" class="cta-link"><?= the_field('text_button'); ?></a>
            </div>
        </div>
    </section>

    <?php the_content(); ?>
    
    <!--<section class="actuality">
        <div class="container">
            <h2>Les dernières actualités</h2>
            <div class="grid-actuality">
                <?php
/*
                $args = [
                        'post_type' => 'post',
                    'posts_per_page' => 3
                ];

                $query = new WP_Query($args);

                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                        include "parts/card-actuality.php";
                    endwhile;
                endif;

wp_reset_postdata();
                */?>
            </div>
        </div>
    </section>-->
    <!--<section class="students">
        <div class="container">
            <h2>Rencontrer nos étudiants</h2>
                <div class="grid-student">
                    <?php /*$args = [
                        'post_type' => 'etudiants',
                        'posts_per_page' => 4
                    ];

                    $query = new WP_Query($args);

                    if($query->have_posts()):
                        while($query->have_posts()):
                            $query->the_post();
                            include "parts/avatar-profile.php";
                        endwhile;
                    endif;

                    wp_reset_postdata();
                    */?>
            </div>
        </div>
    </section>-->
    <!--<section class="formation">
        <div class="container">
            <h2>Les modules de formations</h2>
            <div class="grid-module">
                <?php /*$args = [
                    'post_type' => 'formations',
                    'posts_per_page' => 2
                ];

                $query = new WP_Query($args);

                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                        include 'parts/card-module.php';
                    endwhile;
                endif;

                wp_reset_postdata();
                */?>
            </div>
        </div>
    </section>-->
</main>
<?php
get_footer();
?>