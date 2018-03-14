<div id="home-remas">
    <div class="hidden-sx section split-color-back">
        <h3 class="text-center section-header"><?php echo get_theme_mod('home_remas_heading', 'Remas'); ?></h3>
        <p class="text-center section-sub-header"><?php echo get_theme_mod('home_remas_sub_heading', 'Enriqueze tu vida leendo los remas.'); ?></p>
        <div class="container">
            <div class="row">
                <div class="col-md">
                <?php
                    $remaPosts = new WP_Query(array(
                        'post_type' => 'rema',
                        'posts_per_page' => 4
                    ));
                    while ($remaPosts->have_posts()) {
                        $remaPosts->the_post(); ?>
                        <li><?php the_title(); ?></li>
                    <?php }
                ?>

                    <div class="text-center top-pad">
                        <a href="<?php echo get_theme_mod('home_remas_button_url', '#'); ?>">
                            <button type="button" class="btn btn-outline-primary"><?php echo get_theme_mod('home_remas_button_text', 'Ver todos'); ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>