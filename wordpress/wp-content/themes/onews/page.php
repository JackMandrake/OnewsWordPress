<?php get_header() ?>

<?php if (have_posts()): while(have_posts()): the_post(); ?>
<h2 class="right__title"><?php the_title() ?></h2>
<div class="posts">

    <?php the_content(); ?>
</div>
<?php  endwhile; endif; ?>

<?php get_footer() ?>