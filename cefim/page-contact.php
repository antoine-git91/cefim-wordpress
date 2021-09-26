<?php /*Template Name: Contact*/ ?>

<?php
get_header();
require_once('parts/nav-home.php');
?>
<main>
    <section>
        <div class="container">
            <div class="container-content-text content-article">
                <h1><?php the_title(); ?></h1>
            </div>
            <?php the_content() ?>
        </div>
    </section>
</main>
<?php
get_footer();
?>