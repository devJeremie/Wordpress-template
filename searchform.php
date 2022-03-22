<form action="<?php echo home_url('/'); ?>" method="GET">
    <input type="search" placeholder="Rechercher" name="s" id="searchfield" value="<?php the_search_query(); ?>">
    <input type="image" alt="Recherche" src="<?php bloginfo('template_url'); ?>/assets/img/search.svg">
</form>