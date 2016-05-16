<?php get_header(); ?>

<div id= "mainContent">
  <section><?php the_content(); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <?php the_title();?>
    <?php the_content('');?>
    <?php endwhile; endif;?>
  </section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

page.php
