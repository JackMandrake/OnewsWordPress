<?php get_header() ?>

<h2 class="right__title">Latest News</h2>
<div class="posts">

  <?php if (have_posts()): while(have_posts()): the_post();

    get_template_part('template-parts/article/excerpt');

  endwhile; endif; ?>


  <!-- <article class="post">
    <a href="" class="post__category post__category--color-team">team</a>
    <h3>Lorem ipsum dolor article 1</h3>
    <div class="post__meta">
      <img class="post__author-icon" src="../images/icon-dar.png" alt="">
      <strong class="post__author">Darren Collison</strong>
      <time datetime="2018-02-10">le 10 février 2018</time>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pacers, perferendis, saepe.</p>
    <a href="article.html" class="post__link">Continue reading</a>
  </article> -->
</div>

<?php get_footer() ?>