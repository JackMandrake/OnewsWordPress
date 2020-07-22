<article class="post">

  <?php

    // Je demande à WordPress de me donner TOUTES les catégories de mon contenu
    // actuellement parcouru par la boucle de WordPress
    $array_content_categories = get_the_category();

    // J'ai donc récupéré un tableau de categories.
    // Chaque taxonomie dans WordPress est une instance de la classe WP_Term
    // https://developer.wordpress.org/reference/classes/wp_term/
    // Ma variable $categ contient donc une instance WP_Term
    // TOUTES les propriétés étant public, il suffit de "cibler" -> la propriété pour y acceder
    foreach ($array_content_categories as $categ): ?>

      <a href="<?= get_category_link($categ) ?>" class="post__category post__category--color-<?= $categ->slug ?>">
        <?= $categ->name ?>
      </a>

    <?php endforeach; ?>

  <h3><?php the_title() ?></h3>
  <div class="post__meta">
    <img class="post__author-icon" src="../images/icon-dar.png" alt="">
    <strong class="post__author"><?php the_author() ?></strong>
    <time datetime="<?= get_the_date('Y-m-d') ?>">le <?= get_the_date() ?></time>
  </div>
  <p><?php the_excerpt() ?></p>
  <a href="<?php the_permalink() ?>" class="post__link">Continue reading</a>
</article>