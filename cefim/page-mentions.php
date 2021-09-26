<?php /* Template Name:politique */ ?>

<?php get_header(); ?>
<?php require_once('parts/nav-home.php') ?>
<main>
    <section class="mentions">
    <div class="container">
        <div class="container-content-text content-article">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
    </div>
    </section>
</main>

<?php get_footer(); ?>
