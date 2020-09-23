<?php get_header() ?>

<div  id="fullpage">
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
            <a href="#" class="bedrijfsVideo" data-target="#bedrijfsModaal" data-toggle="modal">
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
            <p>Huisstijl</p>
            <p>Website</p>
          </div>
          <a href="<?php echo esc_url(get_permalink(get_page_by_title( 'Pakket aanvragen' ))); ?>">
            <button>Aanvragen</button>
          </a>
        </div>

        <div class="standard">
          <img class="pakketIcon standardIcon" src="<?php echo get_template_directory_uri() . '/img/standardIcon.png' ?>" alt="Standard plan - Power Marketing">
          <h2>STANDARD</h2>
          <h3>€5.000</h3>
          <div class="pakketItems">
            <p>Logo Design</p>
            <p>Huisstijl</p>
            <p>Website</p>
            <p>Bedrijfsvideo</p>
          </div>
          <a href="#">
            <button>Aanvragen</button>
          </a>
        </div>

        <div class="prenium">
          <img class="pakketIcon preniumIcon" src="<?php echo get_template_directory_uri() . '/img/preniumIcon.png' ?>" alt="Prenium plan - Power Marketing">
          <h2>PREMIUM</h2>
          <h3>€10.000</h3>
          <div class="pakketItems">
            <p>Logo Design</p>
            <p>Huisstijl</p>
            <p>Website</p>
            <p>3 video's</p>
            <p>Online Marketing Plan</p>
          </div>
          <a href="#">
            <button>Aanvragen</button>
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
              <a href="#" class="team-link" data-toggle="modal" data-target="#cornellModal">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow.png' ?>" alt="">
                <p>Meer info</p>
              </a>
            </div>
          </div>

          <div class="team-grid-item">
            <div class="team-kaartje">
              <img src="<?php echo get_template_directory_uri() . '/img/mees.jpg' ?>" alt="Een foto van designer Larissa van Rijn.">
              <h3 class="team-naam">Mees Postma</h3>
              <p class="team-functie">Developer</p>
              <a href="#" class="team-link" data-toggle="modal" data-target="#meesModal">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow.png' ?>" alt="">
                <p>Meer info</p>
              </a>
            </div>
          </div>

          <div class="team-grid-item">
            <div class="team-kaartje">
              <img src="<?php echo get_template_directory_uri() . '/img/larissa.jpeg' ?>" alt="Een foto van designer Larissa van Rijn.">
              <h3 class="team-naam">Larissa van Rijn</h3>
              <p class="team-functie">Graphic Designer</p>
              <a href="#" class="team-link" data-toggle="modal" data-target="#larissaModal">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow.png' ?>" alt="">
                <p>Meer info</p>
              </a>
            </div>
          </div>
          <div class="team-grid-item">
            <div class="team-kaartje">
              <img src="<?php echo get_template_directory_uri() . '/img/mitchel.jpg' ?>" alt="Een foto van designer Larissa van Rijn.">
              <h3 class="team-naam">Mitchel Westerwaal</h3>
              <p class="team-functie">Graphic Designer</p>

              <a href="#" class="team-link" data-toggle="modal" data-target="#mitchelModal">
                <img src="<?php echo get_template_directory_uri() . '/img/arrow.png' ?>" alt="">
                <p>Meer info</p>
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
</div>


<div class="go-to-top-container" id="naarBoven">
  <a href="#home">
      <img src="<?php echo get_template_directory_uri() . '/img/go-to-top.svg' ?>" alt="">

  </a>
</div>

<!-- Het modaal va Mitchel -->
<div class="modal fade" id="bedrijfsModaal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl backgroundBedrijf">
    <div class="modal-content">
      <div class="bedrijfsModal" style="padding:52.73% 0 0 0;position:relative;">
        <iframe src="https://player.vimeo.com/video/460306959?color=ffffff&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>

      <script src="https://player.vimeo.com/api/player.js"></script>
    </div>
  </div>
</div>

<!-- Het modaal van Mitchel -->

<div class="modal fade" id="mitchelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Hai, mijn naam is Mitchel Westerwaal!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="modal-content-over">Mijn naam is Mitchel Westerwaal, 19 jaar oud en werkzaam als video maker & grafisch
          vormgever bij Power Maketing. Hiernaast ben ik erg op de hoogte van de laatste ontwikkelingen op het
          gebied van Social Media en Online Marketing.
        </p>

        <h3 class="text-center modal-project">Bekijk hier een project van mij</h3>
        <div class="container-flex modal-project-container">
          <div class="row modal-project-row d-flex">
            <div class="col-md-6 modal-project-image my-auto">
              <div style="padding:56.25% 0 0 0;position:relative;">
                <iframe src="https://player.vimeo.com/video/460236342?color=c9ff23&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
              </div>
            </div>

            <div class="col-md-6 modal-project-info align-self-center">
              <h2 class="modal-project-title">Hi Monday Aftermovie</h2>
              <p class="modal-project-omschrijving">
                In opdracht van Hi Monday (evenementen bureau) die een dinnershow hadden georganiseerd, heb ik een aftermovie moeten
                maken. Dit feest die werd gehouden op de Supper Club Cruise in Rotterdam moest een gezellige en unieke sfeer uitstralen
                en dit moest ik op beeld overbrengen. Hieronder het eindresultaat.</p>
            </div>
          </div>
        </div>
        <a href="https://www.mitchelwesterwaal.nl" target="_blank">
          <button class="btn modal-portfolio-button">Naar mijn Portfolio</button>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Het modaal van Larissa -->
<div class="modal fade" id="larissaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Hai, mijn naam is Larissa van Rijn!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="modal-content-over">Mijn naam is Larissa van Rijn en ik studeer op het
          Mediacollege in Amsterdam. Vormgeving heeft mij altijd wel bezig gehouden sinds ik
          begonnen ben met de opleiding Mediavormgeving.
        </p>

        <h3 class="text-center modal-project">Bekijk hier een project van mij</h3>
        <div class="container-flex modal-project-container">
          <div class="row modal-project-row d-flex">
            <div class="col-md-6 modal-project-image my-auto">
              <img src="<?php echo get_template_directory_uri() . '/img/LarissaProject.png' ?>" alt="Table Card project - Larissa van Rhijn">
            </div>

            <div class="col-md-6 modal-project-info align-self-center">
              <h2 class="modal-project-title">Hotel Table card</h2>
              <p class="modal-project-omschrijving">
                De table card wordt vaak gebruikt in hotels waar nuttige informatie opstaat voor de
                bezoeker. De elementen die ik toevoeg zijn de QR-code die leidt naar de webapp die
                GuestCompass ontworpen heeft, de informatie wat de klant erop wil hebben en het beeld.
                De kleuren pak ik meestal van het hotel haar websitestijl en zorg ervoor dat die een
                beetje op elkaar lijken.</p>
            </div>
          </div>
        </div>
        <a href="https://larissavanrijn.wixsite.com/lvrdesign" target="_blank">
          <button class="btn modal-portfolio-button">Naar mijn Portfolio</button>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Modaal van Cornell -->
<div class="modal fade" id="cornellModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Hai, mijn naam is Cornell van der Straaten!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="modal-content-over">Ik ben Cornell, 17 jaar. Momenteel een student aan het Mediacollege Amsterdam waar ik
          MediaDevelopment doe. Ik zorg ervoor dat websites en applicaties er goed uit zien zowel als dat
          achter de schermen alles soepel verloopt en de gebruiker geen problemen krijgt.
        </p>

        <h3 class="text-center modal-project">Bekijk hier een project van mij</h3>
        <div class="container-flex modal-project-container">
          <div class="row modal-project-row d-flex">
            <div class="col-md-6 modal-project-image my-auto">
              <img src="<?php echo get_template_directory_uri() . '/img/hubsor.jpg' ?>" alt="Hubsor - Cornell van der Straaten">
            </div>

            <div class="col-md-6 modal-project-info align-self-center">
              <h2 class="modal-project-title">Mijn bedrijf Hubsor</h2>
              <p class="modal-project-omschrijving">
                Samen met Mees Postma ben ik een bedrijf gestart, hubsor. Hier maken wij websites en verzorgen andere
                services zoals hosting installatie, plugin installatie en het verbeteren of verzorgen van SEO. Door onze
                goede samenwerking krijgen we ons werk goed voor elkaar. Ook hebben wij goed zicht op wat de uiteindelijke
                klant nodig heeft en wilt. Zo kan de klant iets op een manier willen die niet optimaal is voor de klant, wij zijn
                er dan om ervoor te zorgen dat het verandert naar een manier die de klant helpt. </p>
            </div>
          </div>
        </div>
        <a href="https://cornellvdstraaten.nl/" target="_blank">
          <button class="btn modal-portfolio-button">Naar mijn Portfolio</button>
        </a>
      </div>
    </div>
  </div>
</div>


<!-- Modaal van Mees -->
<div class="modal fade" id="meesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Hai, mijn naam is Mees Postma!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="modal-content-over">Hallo, mijn naam is Mees Postma, 17 jaar en ik studeer op het Mediacollege
          Amsterdam waar ik Mediadevelopment doe. Hier leer ik websites maken, optimaliseren en onderhouden. Buiten school
          ben ik met Cornell bezig met een eigen bedrijf waar wij websites en online diensten verkopen.
        </p>

        <h3 class="text-center modal-project">Bekijk hier een project van mij</h3>
        <div class="container-flex modal-project-container">
          <div class="row modal-project-row d-flex">
            <div class="col-md-6 modal-project-image my-auto">
              <img src="<?php echo get_template_directory_uri() . '/img/hubsor.jpg' ?>" alt="Hubsor - Mees Postma">
            </div>

            <div class="col-md-6 modal-project-info align-self-center">
              <h2 class="modal-project-title">Mijn bedrijf Hubsor</h2>
              <p class="modal-project-omschrijving">
                Dit is Hubsor, een bedrijf die ik beheer samen met Cornell. Hier verkopen wij websites en online diensten
                zoals SEO optimalisatie, Performance van websites verbeteren en nog veel meer. Wij kijken goed naar wat een klant
                wilt. En proberen altijd zo goed mogelijk te maken naar de wensen van de klant. Voor meer informatie, kijk op
                <a href="https://www.hubsor.nl" target="_blank">hubsor.nl</a>.</p>
            </div>
          </div>
        </div>
        <a href="https://www.meespostma.nl" target="_blank">
          <button class="btn modal-portfolio-button">Naar mijn Portfolio</button>
        </a>
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>