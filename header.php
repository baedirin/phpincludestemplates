<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name= "viewport" content= "width=device-width, initial-scale=1.0">
<meta name= "ROBOTS" content= "NOINDEX, NOFOLLOW">
<a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a>
<title>Jayne Strange</title>
<link rel= "stylesheet" href= "styles/navstyles.css"/>
<link rel= "stylesheet" href= "styles/style.css"/>
<link rel= "stylesheet" type= "text/css" href= "https://fonts.googleapis.com/css?family=Quicksand"/>
<?php wp_head();?>
</head>
<body <?php body_class('home-page');?>>
<header id="navHeader">
    <div id= "siteBanner">
        <img alt= "banner" src= "images/banner.jpg"/>
    </div>

<div id= "subHeader">
 	<h1 id= "pageTitle">Home</h1>
    <a href="#" id= "hamburger" class="menu-link">&#9776;</a>
</div><br>
</header>
<div id= "leftContainer">
<a href= "template.php"><img alt= "logo" id= "siteLogo" src= "images/logo.png"/></a>
<?php wp_nav_menu( array());?>
<nav id= "cssmenu">
	<ul>
    	<li class="active"><a href="template.php"><span>Home</span></a></li>
   		<li class="has-sub"><a href="#"><span>About</span></a>
            <ul>
              <li><a href="about.php"><span>About Jayne</span></a></li>
              <li><a href="contact.php"><span>Contact Jayne</span></a></li>
            </ul>
      	</li>
        <li class="has-sub"><a href="gallery.php"><span>Artwork</span></a>
          	<ul>
              <li><a href="commission.php"><span>Commission Artwork</span></a></li>
            </ul>
      	</li>
        <li class="has-sub"><a href="products.php"><span>Products</span></a>
            <ul>
              <li><a href="pricing.php"><span>Pricing and Info</span></a></li>
            </ul>
      	</li>
    </ul>
</nav>
</div>
header.php
