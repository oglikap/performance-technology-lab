<div class="uk-navbar-container uk-background-default" uk-navbar>
  <div class="uk-navbar-left">
    <a href="<?php bloginfo( 'url' ); ?>" class="uk-navbar-item uk-logo uk-text-uppercase uk-text-primary"><span style="writing-mode: tb-rl;">LAB</span>LAB</a>
  </div>
  <div class="uk-navbar-right uk-margin-right">
    <a class="uk-visible@s" href="#bs-navigation" uk-toggle uk-icon="icon: menu; ratio: 3"></a>

    <a class="uk-hidden@s" href="#bs-navigation" uk-toggle uk-icon="icon: menu; ratio: 2"></a>
  </div>

</div>

<div id="bs-navigation" uk-offcanvas="flip: true">
  <div class="uk-offcanvas-bar">

    <?php wp_nav_menu(
      array(
        'theme_location' => 'bs_hoofd_menu',
        'container' => 'ul',
        'menu_class' => 'uk-nav uk-nav-default'
      )
      )  ?>

  </div>

</div>
