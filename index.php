<?php get_header(); ?>
<main>
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        echo '<h2>' . get_the_title() . '</h2>';
        the_content();
    endwhile;
else :
    echo '<p>Nenhum conteúdo encontrado.</p>';
endif;
?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
