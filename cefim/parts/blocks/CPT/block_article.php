
<?php
$number = get_field('number_item');
$post_type = get_field('check');
$style= get_field('style');
$title= get_field('title_section');

$args = [
    'post_type' => $post_type,
    'posts_per_page' => $number,
];

$query = new WP_Query($args); ?>

<section class="actuality">
    <div class="container">
        <h2><?= $title ?></h2>
        <div class="flex-block">
        <?php if($query->have_posts()):
            while($query->have_posts()):
                $query->the_post();?>
                <article class="card card-actualy">
                    <a href="<?php the_permalink(); ?>">
                        <picture>
                            <?php the_post_thumbnail('actuality-card'); ?>
                        </picture>
                        <div class="card-content-text">
                            <time class="date"><?php the_date(); ?></time>
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt();?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="link-arrow">Lire la suite</a>
                    </a>
                </article>
           <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
        </div>
    </div>
</section>
