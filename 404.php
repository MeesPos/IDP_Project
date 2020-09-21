<?php get_header(); ?>

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

<section id="error" class="row">
    <h1>404</h1>
    <h3>Onee, deze pagina is niet gevonden!</h3>
    <p>Maar geen paniek, je kan altijd nog terug naar de home pagina!</p>
    <a href="<?php get_home_url(); ?>">
        <button class="homeButton">Naar Home</button>
    </a>
</section>

<?php get_footer(); ?>