<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header();
?>

    <div class="header-image">

      <div class="headline">
        <div class="container">
          <h1>One Page Wonder</h1>
          <h2>Will Knock Your Socks Off</h2>
        </div>
      </div>

    </div><!-- /header-image -->

    <div class="container">

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette" id="about">
        <img class="featurette-image img-circle img-responsive pull-right" src="http://placecreature.com/500/500">
        <h2 class="featurette-heading">This First Heading <span class="text-muted">Will Catch Your Eye</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette" id="services">
        <img class="featurette-image img-circle img-responsive pull-left" src="http://placecreature.com/500/500">
        <h2 class="featurette-heading">The Second Heading <span class="text-muted">Is Pretty Cool Too.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette" id="contact">
        <img class="featurette-image img-circle img-responsive pull-right" src="http://placecreature.com/500/500">
        <h2 class="featurette-heading">The Third Heading <span class="text-muted">Will Seal the Deal.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <!-- /END THE FEATURETTES -->

      <hr>

    
     
<?php get_footer(); ?>
