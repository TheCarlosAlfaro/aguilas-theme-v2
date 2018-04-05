<!-- bootstrap 3 column grid with the loop -->
<div class="container">
      <div class="row">
        <!--right-->
        <div class="col-md-11">
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
        <div class="col-sm-4">
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <!-- <p class="meta"> <i class="fa fa-clock-o"></i> <?php the_time('j M , Y') ?> <i class="fa fa-thumb-tack"></i> <strong>	<?php the_category(','); ?></strong></p> -->
            <a href="<?php the_permalink(); ?>" class="link-article">
              <?php the_post_thumbnail('wlow_single', array('class' => 'img-res','alt' => get_the_title())); ?>
            </a>
              <p class="post-summary"><?php the_excerpt(); ?></p>
          </article>
        </div>

          <?php $counter += 1; ?>

          <?php
              if ($counter == 3 ) {
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