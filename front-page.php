<?php get_header(); ?>
<div class="uk-flex uk-flex-bottom uk-flex-center uk-background-secondary uk-padding-large">
  <h1 style="line-height: 1;" class="uk-heading-small uk-text-center uk-padding-large"><span class="uk-light">Performance</span><br><span class="uk-text-primary" style="font-size: 2em; line-height: .5">Lab</span><br /><span class="uk-light">Technology</span></h1>

</div>

<nav class="uk-navbar-container" uk-sticky="bottom: #offset">
  <ul class="uk-subnav uk-flex uk-flex-center uk-flex-middle uk-padding-small" uk-scrollspy-nav="closest: li; scroll: true">
    <li><a href="#ptl-is">Is</a></li>
    <li><a href="#ptl-why">Waarom</a></li>
    <li><a href="#ptl-how">Hoe</a></li>
    <li><a href="#ptl-who">Wie</a></li>
    <li><a href="#ptl-involve">MEEDOEN?</a></li>
  </ul>
</nav>

<div class="uk-section uk-padding-remove-top" id="ptl-is">

  <div class="uk-container uk-container-small">

  <!-- <p class="uk-text-lead uk-text-center" id="ptl-is">
    IS…
  </p> -->
    <p>
      Een werkplaats voor podiumkunstenaars om te experimenteren met oude en nieuwe technologie -  van video, audio, interactief licht en camera's tot arduino, robots, VR en AR.
    </p>
    <p>
      Een lab waar theatermakers, designers en technische experts elkaar treffen om hands-on de creatieve mogelijkheden van verschillende technologieën te onderzoeken en schetsen te maken voor nieuwe concepten
    </p>
    <p>
      Een atelier om samen uit te vinden wat nodig is voor het creëren van nieuwe artistieke content en na te denken over de effecten van de technologisering op de podiumkunst en op onze samenleving.
    </p>
  </div>
</div>

<div class="uk-section uk-section-primary" id="ptl-why">
  <div class="uk-container uk-container-small">
    <!-- <p class="uk-text-lead uk-text-center">
      WAAROM…
    </p> -->
    <p>
      Steeds meer theatermakers ontwikkelen concepten waarin moderne digitale technologie een rol speelt. Ze spelen met de visuele cultuur van nu en gebruiken daarvoor allerlei nieuwe technologie. Die technologie kan op het podium alleen betekenis krijgen als die vanaf het begin af aan tijdens de concept- en ontwikkelfase van een project betrokken wordt.
    </p>
    <p>
      In dit lab snijdt het mes aan twee kanten: technologiebedrijven en ontwikkelaars hebben behoefte aan de verbeelding en creativiteit van kunstenaars. Samen uitvinden, door nieuwe apparatuur te testen, andere artistieke en functionele effecten te ontdekken en nieuwe toepassingen te ontwikkelen.
    </p>
  </div>
</div>

<div class="uk-section uk-section-secondary" id="ptl-how">
  <div class="uk-container uk-container-small">
    <p class="uk-text-lead uk-text-center">HOE..</p>
    <p>
      De komende twee jaar ontwikkelen we deze nomadische studio:
      <ul class="uk-list-large">
        <li>
          bouwen aan een community on line, waar mensen, plannen, kennis elkaar ontmoeten en versterken.
        </li>
        <li>
          organiseren fysieke labs.  #1. Over het IJ 2019, van 3 t/m 10 juli.  [link naar lab info gedeelte]
        </li>
      </ul>
    </p>
    <p>
      Het is een lab waar ieder gezelschap, kunstenaar of producent bij aan kan haken. Iedereen kan meedoen. [link naar Mee doen?]
    </p>
  </div>
</div>

<div class="uk-section uk-section-muted" id="ptl-who">
  <div class="uk-container uk-container-small uk-text-center">
    <h2 class="uk-text-center">WIE</h2>
    <p class="uk-text-lead">
      Het Performance Technology Lab is een groeiend netwerk van partners productie, talentontwikkeling, presentatie en technologie.
    </p>
    <h3 class="uk-text-uppercase">Founding partners</h3>

    <?php
      $images = get_field('logo_gallery');
      if( $images ) { ?>
        <div class="uk-grid uk-child-width-1-3 uk-child-width-1-4@s uk-child-width-1-6@m">
          <?php
          foreach( $images as $image ) { ?>
            <a href="<?php echo $image['caption']; ?>" target="_blank">
              <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" uk-img>
            </a>
          <?php

          } ?>
        </div>
      <?php } ?>

        <div class="uk-grid uk-child-width-1-2 uk-margin-large-top">
          <div>
            <h3>POWERED BY</h3>
            <?php
              $image = get_field('beamlab');
              $size = 'thumbnail';

              if( $image ) { ?>
                <a href="<?php echo $image['caption']; ?>" target="_blank">
                  <?php	echo wp_get_attachment_image( $image, $size ); ?>
                </a>
              <?php } ?>
          </div>
          <div>
            <h3>MET STEUN VAN:</h3>

            <?php
              $image = get_field('supported_by');
              $size = 'thumbnail';

              if( $image ) { ?>
                <a href="<?php echo $image['caption']; ?>" target="_blank">
                  <?php	echo wp_get_attachment_image( $image, $size ); ?>
                </a>

              <?php } ?>

          </div>
        </div>


    <p class="uk-text-small">
      Het Performance Technology Lab is een open en groeiend netwerk van partners in productie, talentontwikkeling, presentatie en technologie.
    </p>
    <p class="uk-text-small">
      CREDITS / COLOFON
      Redactie & coördinatie: Pol Eggermont, Nienke Rooijakkers & Caspar Nieuwenhuis
      Technische productie: Jason Malone / BeamLab
      Web: Rutger Kroon
      Ontwerp: Herman van Bostelen
    </p>
  </div>
</div>

<div class="uk-section" id="ptl-involve">
  <div class="uk-container uk-container-small">
    <p class="uk-text-lead uk-text-center">MEEDOEN?</p>
    <p>Het Performance Technology Lab verzamelt plannen.</p>

    <form>
      <fieldset class="uk-fieldset">

        <legend class="uk-legend">Doe mee. Meld je aan.</legend>

        <div class="uk-child-width-1-2@s uk-grid">
          <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Naam">
          </div>
          <div>
            <input class="uk-input" type="text" placeholder="Adres">
          </div>
        </div>

        <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
          <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Telefoonnummer">
          </div>
          <div>
            <input class="uk-input" type="text" placeholder="Email">
          </div>
          <div>
            <input class="uk-input" type="text" placeholder="Website">
          </div>
        </div>

<!--
            <div class="uk-margin">
                <select class="uk-select">
                    <option>Option 01</option>
                    <option>Option 02</option>
                </select>
            </div> -->

          <div class="uk-margin">
            <legend class="uk-legend">Wat wil je onderzoeken?</legend>
            <textarea class="uk-textarea uk-margin-top" rows="5" placeholder="Beschrijf het kader of het project in ontwikkeling. Wat zijn je vragen? Welke expertise breng je mee?"></textarea>
          </div>

            <!-- <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                <label><input class="uk-radio" type="radio" name="radio2" checked> A</label>
                <label><input class="uk-radio" type="radio" name="radio2"> B</label>
            </div> -->

            <div class="uk-margin">
              <legend class="uk-legend">Welke expertise heb je nodig?</legend>

              <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                <label><input class="uk-checkbox" type="checkbox"> Regisseur</label>
                <label><input class="uk-checkbox" type="checkbox"> Choreograaf</label>
                <label><input class="uk-checkbox" type="checkbox"> VJ</label>
                <label><input class="uk-checkbox" type="checkbox"> Vormgever</label>
                <label><input class="uk-checkbox" type="checkbox"> Scenograaf</label>
                <label><input class="uk-checkbox" type="checkbox"> Uitvinder</label>
                <label><input class="uk-checkbox" type="checkbox"> Producent</label>
                <label><input class="uk-checkbox" type="checkbox"> Schrijver</label>
                <label><input class="uk-checkbox" type="checkbox"> Dramaturg</label>
                <label><input class="uk-checkbox" type="checkbox"> Filmer</label>
                <label><input class="uk-checkbox" type="checkbox"> Video Artist</label>
                <label><input class="uk-checkbox" type="checkbox"> Theatermaker</label>
                <label><input class="uk-checkbox" type="checkbox"> Danser</label>
                <label><input class="uk-checkbox" type="checkbox"> Speler</label>
                <label><input class="uk-checkbox" type="checkbox"> Coder</label>
                <label><input class="uk-checkbox" type="checkbox"> Designer</label>
                <label><input class="uk-checkbox" type="checkbox"> Developer</label>
                <label><input class="uk-checkbox" type="checkbox"> Lichtontwerper</label>
                <label><input class="uk-checkbox" type="checkbox"> Geluidsontwerper</label>
                <label><input class="uk-checkbox" type="checkbox"> Techicus</label>
              </div>
            </div>


            <div class="uk-margin">
                <input class="uk-range" type="range" value="2" min="0" max="10" step="0.1">
            </div>

        </fieldset>
    </form>

  </div>
</div>

<?php get_footer(); ?>
