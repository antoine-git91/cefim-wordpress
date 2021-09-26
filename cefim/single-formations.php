<?php
get_header();
require_once('parts/nav-home.php');
?>
<main>
    <section>
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <div class="header-module-article" style="background-image:url('<?= $url ?>')">
                <h1><?php the_title(); ?></h1>
        </div>
        <div class="container">
            <div class="container-content-text">
            <?php the_content(); ?>
            </div>
            <!--<div class="container-content-text">
                <?php /*$catch_sentence = get_field('catch_sentence'); */?>
                <p class="catch-sentence"><?/*= $catch_sentence */?></p>
            </div>
                <section class="formation-details">
                    <?php
/*                   if( have_rows('formation_details') ): //parent group field
                   	while( have_rows('formation_details') ): the_row();
                        $length = get_sub_field('formation_length');
                        $degree = get_sub_field('formation_degree');
                        $modality = get_sub_field('formation_modality');
                        $full_formation = get_sub_field('full_formation');
                        $hybride_formation = get_sub_field('hybride_formation');
                        $job = get_sub_field('future_job');
                        $learning_formation = get_field('formation_learning');
                        */?>
                        <div class="detail-box length">
                            <p class="title-box">Durée</p>
                            <div class="content-box">
                            <?/*= $length */?>
                            </div>
                        </div>
                        <div class="detail-box degree">
                            <p class="title-box">Diplôme</p>
                            <?php /*if($degree): */?>
                            <div class="content-box">
                                <?/*= $degree['degree_type'] */?>
                                <a href="<?/*= $degree['degree_link'] */?>">Fiche RNCP</a>
                            </div>
                            <?php /*endif */?>
                        </div>
                        <div class="detail-box modality">
                            <p class="title-box">Modalités</p>
                            <div class="content-box">
                                <?php /*if( $modality === 'Formation hybride'): */?>
                                    <p><?/*= $hybride_formation['presentiel'] */?>% présentiel</p>
                                    <p><?/*= $hybride_formation['telepresentiel'] */?>% téléprésentiel</p>
                                <?php /*elseif($modality === 'Formation à 100%'): */?>
                                    <p>100% <?/*= $full_formation */?></p>
                                <?php /*else: */?>
                                nope
                                <?php /*endif; */?>
                            </div>
                        </div>
                        <div class="detail-box job">
                            <p class="title-box">Métiers</p>
                            <?php /*if($job): */?>
                                <div class="content-box">
                                    <?php /*if(have_rows('future_job')): */?>
                                    <?php /*while(have_rows('future_job')): the_row(); */?>
                                        <?php /*the_sub_field('job_name') */?><br>
                                    <?php /*endwhile; */?>
                                    <?php /*endif; */?>
                                </div>
                            <?php /*endif; */?>
                        </div>
                    <?php /*endwhile; */?>
                    <?php /*endif; */?>
                </section>
                <section class="learning">
                    <h2>QU'ALLEZ-VOUS APPRENDRE PENDANT LA <?php /*the_title(); */?>?</h2>
                    <div class="learning-content">
                        <figure>
                            <?php
/*                            $teacher = get_field("teacher");
                            $photo_teacher = get_field( 'photo_formateur', $teacher->ID );
                            */?>
                            <?php /*if($teacher): */?>
                            <?/*= wp_get_attachment_image($photo_teacher, 'student') */?>
                            <figcaption><?/*= esc_html( $teacher->post_title ); */?><span>Référant de la
                                    formation</span></figcaption>
                            <?php /*endif; */?>
                        </figure>
                        <div class="learning-content-text">
                            <?/*= $learning_formation */?>
                        </div>
                    </div>
                </section>-->
        </div>
    </section>
</main>

<?php
get_footer(); ?>