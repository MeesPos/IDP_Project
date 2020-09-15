<?php get_header() ?>

<div id="fullpage">
  <div class="section" id="section1">
    <div class="section-content">
      <h1><i class="fa fa-check-circle-o"></i></h1>
      <h1>Welcome to My SITE</h1>
    </div>
  </div>
  <div class="section" id="section2">section2</div>

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