<?php get_header(); ?>

<div class="container">
  <h1><?php the_archive_title(); ?></h1>
  <div class="flex">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <?php get_template_part('template-parts/article'); ?>
    <?php endwhile; endif; ?>
  </div>
</div>

<?php get_footer(); ?>