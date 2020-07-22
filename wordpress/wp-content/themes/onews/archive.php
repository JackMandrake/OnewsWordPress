<?php get_header() ?>

<h2 class="right__title">Je suis une page d'archive</h2>
<div class="posts">

  <?php if (have_posts()): while(have_posts()): the_post();

    get_template_part('template-parts/article/excerpt');

  endwhile; endif; ?>

</div>

<?php get_footer() ?>