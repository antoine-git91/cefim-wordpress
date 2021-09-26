<article class="card card-actualy">
    <a href="<?php the_permalink(); ?>">
        <picture>
            <?php the_post_thumbnail('actuality-card'); ?>
        </picture>
        <div class="card-content-text">
            <time class="date"><?php the_date(); ?></time>
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="link-arrow">Lire la suite</a>
    </a>
</article>