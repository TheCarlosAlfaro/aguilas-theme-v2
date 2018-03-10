<div id="home-devocional">
    <div class="hidden-sx section parallax" style="background: url(<?php echo get_theme_mod('home_devotionals_image', get_bloginfo('template_url').'/img/showcase.jpg') ?>);
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;"
    >
        <h3 class="text-center section-header"><?php echo get_theme_mod('home_devotionals_heading', 'YAY I build a theme'); ?></h3>
        <p class="text-center section-sub-header"><?php echo get_theme_mod('home_devotionals_sub_heading', 'YAY I build a theme'); ?></p>
        <div class="container text-center">
            <div class="top-pad">
            <?php echo do_shortcode('[contact-form-7 id="92" title="Devotional Sign Up"]'); ?>
            </div>
        </div>
    </div>
</div>