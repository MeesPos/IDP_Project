<?php get_header() ?>



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
        <div class="footer-verkennen ">
          <h3>Verkennen</h3>
          <?php
          wp_nav_menu(array(
            'theme_location'    => 'footer-menu',
            'depth'             => 2,
            'container'         => 'div',
            'menu_class'        => 'footerMenu',
          ));
          ?>
        </div>
      </div>
      <hr>
      <div class="row footer-row">
        <div class="footer-copyright col">2020 © by Power Marketing</div>
        <div class="footer-socials col">
          <p class="socialIcons float-right">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </p>
        </div>
      </div>

    </div>
  </div>
<?php get_footer() ?>