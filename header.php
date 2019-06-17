<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> uk-height-viewport>
    <header></header>
    <main class="bs-site-content">

      <?php get_template_part( 'template-parts/content', 'navigation' ); ?>
