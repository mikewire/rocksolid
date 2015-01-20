<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

	<!-- Footer -->
	<footer>
	  <div class="container"><p>&copy; 2014 Rock Solid Digital</p></div>
	</footer>
	<!-- /Footer -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-6210078-8', 'rocksoliddigital.com');
  ga('send', 'pageview');

</script>
 <script type=text/javascript>
  var mobile = false;
  var tablet = false;
  <? if (is_mobile()) { ?>
    mobile = true;
  <? } ?>
  <? if (is_tablet()) { ?>
    tablet = true;
  <? } ?>

  </script>
  <?php wp_footer(); ?>

  </body>
</html>
