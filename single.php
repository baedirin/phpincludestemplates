<?php get_header(); ?>

<div id= "mainContent">
  <section><?php the_content(); ?>
  <?php
	if ( have_posts() ) {
  	while ( have_posts() ) {
    	the_post(); ?>

  <h2><?php the_title(); ?></h2>

  <?php }#end while
  }else{ ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php } ?>

  </section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

single.php
