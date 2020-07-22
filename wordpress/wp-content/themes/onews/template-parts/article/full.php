<!-- emmet: h2+article>a+h3+div>(img+strong+time)+p+a -->
<h2 class="right__title"><?php the_title() ?></h2>

<article class="post post--solo">
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
  <div class="post__meta">
    <img class="post__author-icon" src="../images/icon-dar.png" alt="">
    <a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>">
      <strong class="post__author"><?php the_author() ?></strong>
    </a>
    <time datetime="<?= get_the_date('Y-m-d') ?>">le <?= get_the_date() ?></time>
  </div>
  <div class="post__content"><?php the_content() ?></div>
  <a href="<?= home_url() ?>" class="post__link">Back to home</a>
</article>