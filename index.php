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
      <h2>Maak kennis met ons team</h2>
      <p>Het team van Power marketing bestaat uit 4 enthusiaste medewerkers.
        Zij staan iedere werkdag voor u klaar, of u nu al klant bent of
        graag meer wilt weten over wat wij doen!
      </p>
      
      <div class="team-container">
        <div class="team-grid-item">
          <div class="team-kaartje">
            <img src="<?php echo get_template_directory_uri() . '/img/cornell.jpg' ?>" alt="Een foto van designer Larissa van Rijn.">
            <h3 class="team-naam">Cornell van der Straaten</h3>
            <p class="team-functie">Developer</p>
            <a href="#" class="team-link">
              <div class="team-portfolio-link-arrow-div">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow.png' ?>" alt="">
                <p>Naar Portfolio</p>
              </div>
            </a>
          </div>
        </div>

        <div class="team-grid-item">
          <div class="team-kaartje">
            <img src="<?php echo get_template_directory_uri() . '/img/mees.jpg' ?>" alt="Een foto van designer Larissa van Rijn.">
            <h3 class="team-naam">Mees Postma</h3>
            <p class="team-functie">Developer</p>
            <a href="#" class="team-link">
              <div class="team-portfolio-link-arrow-div">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow.png' ?>" alt="">
                <p>Naar Portfolio</p>
              </div>
            </a>
          </div>
        </div>

        <div class="team-grid-item">
          <div class="team-kaartje">
            <img src="<?php echo get_template_directory_uri() . '/img/larissa.jpeg' ?>" alt="Een foto van designer Larissa van Rijn.">
            <h3 class="team-naam">Larissa van Rijn</h3>
            <p class="team-functie">Graphic Designer</p>
            <a href="#" class="team-link">
              <div class="team-portfolio-link-arrow-div">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow.png' ?>" alt="">
                <p>Naar Portfolio</p>
              </div>
            </a>
          </div>
        </div>

        <div class="team-grid-item">
          <div class="team-kaartje">
            <img src="<?php echo get_template_directory_uri() . '/img/larissa.jpeg' ?>" alt="Een foto van designer Larissa van Rijn.">
            <h3 class="team-naam">Mitchel Westerwaal</h3>
            <p class="team-functie">Graphic Designer</p>
            <a href="#" class="team-link">
              <div class="team-portfolio-link-arrow-div">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow.png' ?>" alt="">
                <p>Naar Portfolio</p>
              </div>
            </a>
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

</div>

<?php get_footer() ?>