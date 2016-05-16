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
	<div id= "contentCarousel">
    	<img id= "imgCarousel" alt= "carousel" src= "images/homeimg.jpg"/>
    </div>
    <article>
    <h1><?php bloginfo( 'Welcome to Jayne Strange!' ); ?></h1>

    <p>This is my website, where I show things I've drawn, created, and crafted.</p>
	<p>I am a freelance artist in the western US. My work varies from paintings to sculpture and bone engravings.</p>
    <p>I have a beautiful three year old daughter I spend most of my time with and am happily married. My personal hobbies include art and playing games. I love Lord of the    Rings/The Hobbit, unicorns, werewolves, and anything with bone/skulls/skeletons.</p>
    <p>For commission information, pricing and my past work, please explore my website and do not hesitate to contact me!</p>
    </article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
