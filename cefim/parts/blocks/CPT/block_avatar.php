
<?php
$number = get_field('number_item_avatar');
$post_type = get_field('check');
$style= get_field('style');
$title= get_field('title_section');

$args = [
    'post_type' => $post_type,
    'posts_per_page' => $number,
];

$query = new WP_Query($args); ?>

<section class="students">
    <div class="container">
        <h2><?= $title ?></h2>
            <div class="flex-block">
            <?php
            $query = new WP_Query($args);

            if($query->have_posts()):
                while($query->have_posts()):
                    $query->the_post();?>
                    <article class="profil-avatar">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            $size = 'student';
                            $image_student = get_the_post_thumbnail('', $size);
                            ?>
                            <?php if($image_student): ?>
                            <?= $image_student  ?>
                            <?php else: ?>
                            <img src="<?= get_template_directory_uri(); ?>/src/pictures/logo/logo_cefim.jpeg" alt="Photo de
                                        profil de <?php the_title(); ?>">
                            <?php endif; ?>
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <a href="<?php the_permalink(); ?>" class="link-profile">En savoir plus <span class="visually-hidden">à propos de
                                Nom de l'étudiant</span></a>
                    </article>
                <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>
