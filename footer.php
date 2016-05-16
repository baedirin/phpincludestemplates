<footer id= "footerStyles">
	<div class= "linkNav">
    	<p>
    		<a href= "template.php">Home</a>
    		<a href= "about.php">About</a>
    		<a href= "contact.php">Contact</a>
    		<a href= "commission.php">Artwork</a>
    		<a href= "pricing.php">Pricing</a>
        </p>
     </div>
 	<p>Site design © Brittaney Nico Davis, 2016
      <br>
       All artwork and content © Hannah Warner, 2016</p>
  	<p><a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a> and <a href="http://validator.w3.org/check/referer">Valid HTML5</a></p>
    <p><a href="disclaimer.php">DISCLAIMER</a></p>
</footer>
</div>
<script src= "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src= "script/navscript.js"></script>
<script>
	$(document).ready(function() {
		$(".menu-link").click(function(){
			$("#leftContainer").toggleClass("expanded");
			});
		});
</script>
 <?php wp_footer();?>
</body>
</html>
footer.php
