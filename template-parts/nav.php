<header id="main-header">
  <div class="container">
    <nav class="navbar">
      <div class="navbar-brand">
        <a href="<?= home_url('/'); ?>">
          <?php
            if (function_exists('the_custom_logo')) {
              the_custom_logo();
            }
          ?>
        </a>
      </div>
      <?php wp_nav_menu(array(
        'theme_location' => 'header',
        'container' => 'ul'
      )); ?>
    </nav>
  </div>
</header>