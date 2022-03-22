    <?php get_template_part('template-parts/bottom-sidebar'); ?>
    <footer id="main-footer">
      <div class="container">
        <div class="credits">
          <p>Mon super site &copy; 2022</p>
        </div>
        <?php wp_nav_menu(array(
          'theme_location' => 'footer',
          'container' => 'ul'
        )); ?>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>