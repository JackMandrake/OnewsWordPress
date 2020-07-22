<!DOCTYPE html>
<html <?php language_attributes() ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <!-- <title><?php bloginfo('name') ?></title> -->

    <?php wp_head() ?>
  </head>
  <body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left <?= is_page() ? 'left--page' : '' ?>">
        <h1 class="left__title">
          <a href="<?= home_url() ?>"><?php bloginfo('description') ?></a>
        </h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <!-- <nav>
          <ul class="left__nav">
            <li class="left__nav-item"><a href="./plan_de_site.html" class="left__nav-link">Plan du site</a></li>
            <li class="left__nav-item"><a href="./mentions_legales.html" class="left__nav-link">Mentions légales</a></li>
            <li class="left__nav-item"><a href="./contact.html" class="left__nav-link">Contact</a></li>
          </ul>
        </nav> -->
        <?php
          wp_nav_menu([
            'container' => 'nav',
            'menu_class' => 'left__nav',
            'theme_location' => 'main'
          ]);
        ?>
      </header>
      <main class="right">