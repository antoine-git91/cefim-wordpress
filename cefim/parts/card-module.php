<article class="card card-module">
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('formation'); ?>
    <div class="card-content-text">
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
    </div>
    </a>
    <a href="<?php the_permalink(); ?>" class="link-arrow">Lire la suite</a>
</article>