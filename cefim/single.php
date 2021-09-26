<?php
get_header();
require_once("parts/nav-home.php");
?>
<main>
    <section>
        <div class="container">
            <div class="container-content-text content-article">
                <?php the_post_thumbnail('actuality-single'); ?>
                <h1><?php the_title(); ?></h1>
                <time class="date"><?= get_the_date(); ?></time>
                <?php the_content(); ?>
        </div>
    </section>
</main>
<?php
get_footer(); ?>