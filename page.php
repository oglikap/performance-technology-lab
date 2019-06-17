<?php get_header(); ?>

<div class="uk-section">
  <div class="uk-container">

    <h1 class="uk-heading-medium uk-text-center"><?php the_title(); ?></h1>

    <?php get_template_part( 'template-parts/content', 'content' ); ?>
  </div>
</div>

<?php get_footer(); ?>
