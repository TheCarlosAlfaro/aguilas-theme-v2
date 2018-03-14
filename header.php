<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aguilas
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="nav-container">

	<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'aguilas' ); ?></a>

    <header id="masthead" class="site-header" style="background:linear-gradient(0deg,rgba(0,0,0,0.1),rgba(0,0,0,0.1)), url('<?php echo $backgroundImg[0]; ?>') center no-repeat; background-size: 100%;">

        <nav id="menu" class="navbar fixed-top navbar-expand-lg navbar-light" role="navigation">

            <div class="container site-branding navbar-brand">
                <?php
                the_custom_logo();
                if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
                endif;

                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                <?php
                endif; ?>
            </div><!-- .site-branding -->

            <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-text-menu">MENU</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
                wp_nav_menu([
                    'menu'					=>	'primary',
                    'theme_location'		=>	'primary',
                    'container'				=>	'div',
                    'container_id'			=>	'bs4navbar',
                    'container_class'		=>	'collapse navbar-collapse',
                    'menu_id'				=>	'main-menu',
                    'menu_class' 			=>	'navbar-nav ml-auto',
                    'depth'					=>	2,
                    'fallback_cb'			=>	'bs4navwalker::fallback',
                    'walker'				=>	new bs4navwalker()
                ]);
            ?>
        </nav>
        <div class="hero-content-single">
			<h2 class="white hero-heading"><?php the_title(); ?></h2>
			<p class="white hero-text"><?php the_time('M - d - Y') ?></p>
        </div>
        <div class="social">
		<p class="white hero-text">Comparte</p>
            <a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="http://twitter.com/share?" target="_blank">
                <i class="fa fa-twitter"></i>
            </a>
        </div>
    </header><!-- #masthead -->
</div>
