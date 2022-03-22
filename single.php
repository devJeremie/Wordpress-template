<?php get_header(); ?>

<div class="container">
  <article class="article">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="article-thumbnail">
        <?php the_post_thumbnail(); ?>
      </div>
      <h1 class="article-title"><?php the_title(); ?></h1>
      <p class="article-meta">
        Par 
        <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">
          <?php the_author(); ?>
        </a>
        le
        <?php the_time(get_option('date_format')); ?> 
      </p>
      <p class="article-categories"><?php the_category(); ?></p>
      <div class="article-content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; endif; ?>
  </article>
</div>

<?php get_footer(); ?>