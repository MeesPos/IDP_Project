<?php get_header() ?>

<div id="fullpage">
  <div class="section" id="section1">
    <nav class="navbar navbar-expand-lg navbar-light bg-white" id="menuHeader">
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <?php the_custom_logo(); ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
      wp_nav_menu(array(
        'theme_location'    => 'main-menu',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'navbarNav',
        'menu_class'        => 'nav navbar-nav ml-auto',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
      ));
      ?>
    </nav>
    <section id="homeHeader">
      <div class="container-flex">
        <div class="row">
          <div class="headerContent col-xl-6">
            <h1>Power Marketing.</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras maximus
              metus vel congue viverra. Donec sit amet ante a dolor vestibulum luctus.</p>
            <a href="#" class="bedrijfsVideo">
              <i class="fas fa-play-circle"></i>
              <p>Bekijk onze bedrijfsvideo!</p>
            </a>
          </div>

          <div class="headerIllu col-xl-6 text-center">
            <img src="<?php echo get_template_directory_uri() . '/img/headerIllu.png' ?>" alt="Illustration van de Header - Power Marketing">
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="section paketten" id="section2">
    <div class="paketten__box">
      <h2 class="paketten__title text-center">Kijk wat wij te bieden hebben</h2>
      <p class="paketten__omschrijving text-center">Het team van Power Marketing bestaat uit 4 enthusiaste medewerkers.
        Zij staan iedere werkdag voor u klaar, of u nu al klant bent of
        graag meer wilt weten over wat wij doen!</p>
    </div>
    <div class="pakettenCarousel">
      <div class="owl-carousel owl-paketten owl-theme">
        <div class="basic">
          <img class="basicIcon pakketIcon" src="<?php echo get_template_directory_uri() . '/img/basicIcon.png' ?>" alt="Basic plan - Power Marketing">
          <h2>BASIC</h2>
          <h3>€2.500</h3>
          <div class="pakketItems">
            <p>Logo Design</p>
            <p>Website</p>
            <p>SEO Ready</p>
            <p>Enzovoorts</p>
          </div>
          <a href="#">
            <button>Meer Info</button>
          </a>
        </div>

        <div class="standard">
          <img class="pakketIcon standardIcon" src="<?php echo get_template_directory_uri() . '/img/standardIcon.png' ?>" alt="Standard plan - Power Marketing">
          <h2>STANDARD</h2>
          <h3>€5.000</h3>
          <div class="pakketItems">
            <p>Logo Design</p>
            <p>Website</p>
            <p>SEO Ready</p>
            <p>Enzovoorts</p>
          </div>
          <a href="#">
            <button>Meer Info</button>
          </a>
        </div>

        <div class="prenium">
          <img class="pakketIcon preniumIcon" src="<?php echo get_template_directory_uri() . '/img/preniumIcon.png' ?>" alt="Prenium plan - Power Marketing">
          <h2>PREMIUM</h2>
          <h3>€10.000</h3>
          <div class="pakketItems">
            <p>Logo Design</p>
            <p>Website</p>
            <p>SEO Ready</p>
            <p>Enzovoorts</p>
          </div>
          <a href="#">
            <button>Meer Info</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section team-section" id="section3">
    <div class="team-section-container">
      <h2>Maak kennis met ons team</h2>
      <p>Het team van Power marketing bestaat uit 4 enthusiaste medewerkers.
        Zij staan iedere werkdag voor u klaar, of u nu al klant bent of
        graag meer wilt weten over wat wij doen!
      </p>

      <div class="team-container">
        <div class="owl-carousel owl-theme owl-team">
          <div class="team-grid-item">
            <div class="team-kaartje">
              <img src="<?php echo get_template_directory_uri() . '/img/cornell.jpg' ?>" alt="Een foto van designer Larissa van Rijn.">
              <h3 class="team-naam">Cornell van der Straaten</h3>
              <p class="team-functie">Developer</p>
              <a href="#" class="team-link">

                <img src="<?php echo get_template_directory_uri() . '/img/arrow.png' ?>" alt="">
                <p>Naar Portfolio</p>

              </a>
            </div>
          </div>

          <div class="team-grid-item">
            <div class="team-kaartje">
              <img src="<?php echo get_template_directory_uri() . '/img/mees.jpg' ?>" alt="Een foto van designer Larissa van Rijn.">
              <h3 class="team-naam">Mees Postma</h3>
              <p class="team-functie">Developer</p>
              <a href="#" class="team-link">

                <img src="<?php echo get_template_directory_uri() . '/img/arrow.png' ?>" alt="">
                <p>Naar Portfolio</p>

              </a>
            </div>
          </div>

          <div class="team-grid-item">
            <div class="team-kaartje">
              <img src="<?php echo get_template_directory_uri() . '/img/larissa.jpeg' ?>" alt="Een foto van designer Larissa van Rijn.">
              <h3 class="team-naam">Larissa van Rijn</h3>
              <p class="team-functie">Graphic Designer</p>
              <a href="#" class="team-link">

                <img src="<?php echo get_template_directory_uri() . '/img/arrow.png' ?>" alt="">
                <p>Naar Portfolio</p>

              </a>
            </div>
          </div>
          <div class="team-grid-item">
            <div class="team-kaartje">
              <img src="<?php echo get_template_directory_uri() . '/img/mitchel.jpg' ?>" alt="Een foto van designer Larissa van Rijn.">
              <h3 class="team-naam">Mitchel Westerwaal</h3>
              <p class="team-functie">Graphic Designer</p>
              <a href="#" class="team-link">

                <img src="<?php echo get_template_directory_uri() . '/img/arrow.png' ?>" alt="">
                <p>Naar Portfolio</p>
              </a>
              </a>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="section contact-section" id="section4">
    <div class="contact-page-left">
      <div></div>

      <div class="contact-logo">
        <img src="<?php echo get_template_directory_uri() . '/img/logo.svg' ?>" alt="Big purple letter P with a lightning bolt in it.">
      </div>

      <div></div>
    </div>
    <div class="contact-page-right">
      <div></div>
      <div class="contact-page-right-container">
        <h2>NEEM CONTACT OP</h2>
        <?php echo do_shortcode('[wpforms id="8" title="false" description="false"]') ?>
      </div>
      <div></div>
    </div>
  </div>

  <div class="section fp-auto-height footer-section">
    <div class="footer-container container">
      <div class="row">
        <div class="footer-bedrijf-info col-4">
          <img src="<?php echo get_template_directory_uri() . '/img/logoWhite.svg' ?>" alt="Power-Marketing Logo">
          <h3>Power Marketing</h3>
          <p>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Cras maximus metus vel
            congue viverra.</p>
        </div>
        <div class="footer-contact "><?php dynamic_sidebar('footer-contact'); ?></div>
        <div class="footer-verkennen "><?php
                                        wp_nav_menu(array(
                                          'theme_location'    => 'footer-menu',
                                          'depth'             => 2,
                                          'container'         => 'div',
                                          'menu_class'        => 'footerMenu',
                                        ));
                                        ?></div>
      </div>
      <hr>
      <div class="row">
        <div class="footer-copyright col">2020 © by Power Marketing</div>
        <div class="footer-socials col">Social Icons</div>
      </div>

    </div>
  </div>




  <?php get_footer() ?>