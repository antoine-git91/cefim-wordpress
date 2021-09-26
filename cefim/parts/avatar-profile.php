<article class="profil-avatar">
    <a href="<?php the_permalink(); ?>">
        <?php $image_student = get_field('avatar');
              $size = 'student'?>
        <?php if($image_student): ?>
        <?= wp_get_attachment_image($image_student, $size)  ?>
        <?php else: ?>
        <img src="<?= get_template_directory_uri(); ?>/src/pictures/logo/logo_cefim.jpeg" alt="Photo de
                    profil de <?php the_title(); ?>">
        <?php endif; ?>
        <h2><?php the_title(); ?></h2>
    </a>
    <a href="<?php the_permalink(); ?>" class="link-profile">En savoir plus <span class="visually-hidden">à propos de
            Nom de l'étudiant</span></a>

</article>