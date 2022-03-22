<article class="article">
  <div class="article-image">
    <?php the_post_thumbnail(); ?>
  </div>
  <div class="article-infos">
    <h2 class="article-title"><?php the_title(); ?></h2>
    <p class="article-meta">
      Par 
      <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">
        <?php the_author(); ?>
      </a>
      le
      <?php the_time(get_option('date_format')); ?> 
    </p>
    <p class="article-categories"><?php the_category(); ?></p>
    <div class="article-excerpt">
      <?php the_excerpt(); ?>
    </div>
    <a href="<?php the_permalink(); ?>">Lire l'article</a>
  </div>
</article>