<?php
get_header();
require_once('parts/nav-home.php');
?>
<main>
    <section>
        <div class="container">
            <div class="profil-avatar-article">
                <?php
                $size= 'student-single';
                $image_student = get_the_post_thumbnail('', $size);
                ?>
                <?php
                if($image_student):
                echo $image_student;
                else: ?>
                    <img src="<?= get_template_directory_uri(); ?>/src/pictures/logo/logo_cefim.jpeg" alt="Photo de
                    profil de <?php the_title(); ?>">
                <?php endif;?>
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="grid-portrait"> 
                <div class="movie">
                    <p class="title-item-portrait">Son film</p>
                    <p><?= the_field('film') ?></p>
                </div>
                <div class="serie">
                    <p class="title-item-portrait">Sa série</p>
                    <p><?= the_field('serie') ?></p>
                </div>
                <div class="game">
                    <p class="title-item-portrait">Son jeu vidéo</p>
                    <p><?= the_field('video_game') ?></p>
                </div>
                <div class="heroin">
                    <p class="title-item-portrait">Son héro/héroïne</p>
                    <p><?= the_field('heros') ?>.</p>
                </div>
                <div class="book">
                    <p class="title-item-portrait">Son livre</p>
                    <p><?= the_field('book') ?></p>
                </div>
                <div class="song">
                    <p class="title-item-portrait">Sa chanson</p>
                    <p><?= the_field('song') ?></p>
                </div>
                <div class="appli">
                    <p class="title-item-portrait">Son application</p>
                    <p><?= the_field('application') ?></p>
                </div>
                <div class="site-web">
                    <p class="title-item-portrait">Son site web</p>
                    <p><?= the_field('web_site') ?></p>
                </div>
                <div class="bio">
                    <p class="title-item-portrait">En deux mots</p>
                    <p><?= the_field('some_words') ?></p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>