<?php if( have_posts() ) { ?>
  <?php while( have_posts() ) { ?>

    <?php the_post();
    the_content(); ?>

  <?php } ?>
<?php } // endif have_posts ?>
