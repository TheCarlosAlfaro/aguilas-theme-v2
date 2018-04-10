<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aguilas
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header top-pad">

    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-lg-6">
                <a href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap"></a>
            </div>
            <div class="col-sm-8 col-lg-6">
            <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
            <audio src="<?php the_field('audio_url'); ?>" controls="controls" style="width: 100%; height: 30px;"></audio>
            </div>
        </div>
    </div>

		<?php


		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php aguilas_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content text-center">
		<?php
			if (is_single()) {
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'aguilas' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );
			} else {
				the_excerpt();
			}

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aguilas' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php aguilas_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
<hr>
