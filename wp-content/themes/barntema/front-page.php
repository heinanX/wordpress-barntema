<?php
get_header(); // Include header.php file

while (have_posts()) : the_post(); ?>

  <article><?php the_content(); ?></article>

<?php endwhile;

get_footer();
?>
