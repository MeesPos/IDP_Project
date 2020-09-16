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
  <div class="section" id="section2">section2</div>

  <div class="section" id="section3">section4</div>

  <div class="section team-section" id="section3">
    <div class="team-section-container">
      <h2>ONS TEAM</h2>
      <p>Yo hier staat ons team</p>
      <div class="team-container">
        <div class="team-kaartje">
          <img src="" alt="">
          <h3></h3>
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
</div>

<?php get_footer() ?>