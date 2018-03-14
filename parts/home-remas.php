<div id="home-remas">
    <div class="hidden-sx section split-color-back">
        <h3 class="text-center section-header"><?php echo get_theme_mod('home_remas_heading', 'Remas'); ?></h3>
        <p class="text-center section-sub-header"><?php echo get_theme_mod('home_remas_sub_heading', 'Enriqueze tu vida leendo los remas.'); ?></p>
        <div class="container">
            <div class="row">
                <?php
                    $remaPosts = new WP_Query(array(
                        'post_type' => 'rema',
                        'posts_per_page' => 4
                    ));
                    while ($remaPosts->have_posts()) {
                        $remaPosts->the_post(); ?>
                        <div class="col-md-6 col-xl-3">
                            <div class="card mb-4 box-shadow">
                                <a href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="card-text"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_content(), 12) ?></a></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="<?php the_permalink(); ?>">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Leer Mas</button>
                                            </a>
                                        </div>
                                        <a href="<?php the_permalink(); ?>">
                                            <small class="text-muted"><?php the_time('M-d-Y') ?></small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } wp_reset_postdata();
                ?>
            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="top-pad">
                        <a href="<?php echo get_theme_mod('home_remas_button_url', '#'); ?>">
                            <button type="button" class="btn btn-outline-primary"><?php echo get_theme_mod('home_remas_button_text', 'Ver todos'); ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>