<?php
/**
 * The template for displaying archive-preaching
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aguilas
 */

get_header('simple'); ?>

	<div id="primary" class="content-area col-md-12">
    <main id="main" class="site-main">
        <div class="container">
        <div class="row">

            <!--right-->
            <div class="col-md-12">
                <h1 class="top-pad">Predicas</h1>
            <?php
                $counter = 0;
                $startRow = true;
            ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php
                    if ($startRow) {
                        echo '<div class="row">';
                        $startRow = false;
                    }
                ?>
            <div class="col-md-6 col-lg-4 top-pad">
            <div class="img-thumbnail">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>" class="link-article">
                    <?php the_post_thumbnail('large', array('class' => 'img-res','alt' => get_the_title())); ?>
                </a>
                </article>
            </div>
            </div>

            <?php $counter += 1; ?>

            <?php
                if ($counter == 6 ) {
                    echo '</div>';
                    $startRow = true;
                    $counter = 0;
                }
            ?>
            <?php endwhile; ?>
            <?php
            if ($counter != 3) {
                echo '<div>';
                }
            ?>
            <?php else: ?>
            <div class="page-header"><h1>Uh Oh!</h1></div>
            <p>Sorry, for some reason the contents of this page isn't displaying.</p>
            <?php endif; ?>
            </div><!--/right-->
        </div><!--/row-->
        </div><!--/container-->

			<?php get_template_part('inc/pagination'); ?>

            <footer class="entry-footer">
                <?php aguilas_entry_footer(); ?>
            </footer><!-- .entry-footer -->

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer();
