
<?php get_header();?>
<div class= "flexslider">
  <ul class= "sliderimgs">
    <li><img src= "img1.jpg"></li>
    <li><img src= "img2.jpg"></li>
    <li><img src= "img3.jpg"></li>
  </ul>
</div>
<div class= "widget">
  <section class="widget-stuff">
      <h2>Posts Widget:</h2>
      <?php if (have_posts()): while(have_posts() ): the_post();?>
      <?php the_content('');?>
      <?php endwhile; endif;?>
      </section>
  <section class="widget-stuff">
      <h2>Old Post Widget:</h2>
        <ul>
    		    <?php rewind_posts();?>
            <?php query_posts('showposts=5');?>
            <?php while (have_posts()): the_post();?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
            <?php endwhile;?>
        </ul>
  </section>
  <section class="widget-stuff">
       <h2>Commission Info Widget:</h2>
       <p></p>
       <p></p>
       <p></p>
  </section>
</div>
<?php get_footer();?>
front-page.php
