<? get_template_part('partials/_head'); ?>
<body <?php body_class($class); ?> data-spy="scroll" data-target="#main-nav" data-offset="70">
	<!--[if lt IE 8]><div class="alert alert-warning"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

	<header class="navbar navbar-inverse navbar-fixed-top" role="banner" >
	  <div class="container">
	    <div class="navbar-header">
	      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a href="../" class="navbar-brand"><img src="/assets/img/logo-new.png" alt="logo-new" width="393" height="73" /></a>
	    </div>
      <nav class="collapse navbar-collapse" role="navigation" id="main-nav">
      <?php
	      if (has_nav_menu('primary_navigation')) :
	        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
	      endif;
	    ?>   
	    </nav>
    </div>
	</header>
	
  <!-- Full Page Image Header Area -->
    <div id="top" class="home-header">
      <div class="container">
        <div class="vert-text">
          <h1>We Create <i>RockSolid</i> Digital Experiences</h1>
        </div>
        <a class="arrow-down" href="#what-we-do"><i class="fa fa-chevron-down"></i></a>
      </div>
    </div>
    <!-- /Full Page Image Header Area -->	
	
   <!-- Intro -->
    <div id="what-we-do" class="intro">
      
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
<!--             <h2>Rock Solid is a new kind of Digital Agency founded in the idea that your digital needs go well beyond a new website.</h2> -->
            <h2>We're a different kind of digital agency</h2>
            <p class="lead">We focus on building products and digital experiences that are rooted in commercial benefits for your business: whether that is increased guest / customer satisfaction or a greater conversion rate on your websites.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <i class="service-icon fa fa-rocket "></i>
              <section>
                <h4>Digital Strategy</h4>
                <p>We can help you define a digital strategy that goes beyond "just" a new website. Sure a website is important, but have you considered your entire digital presence? We can help you build a digital strategy with creative ideas that will leave the competition trailing.</p>
              </section>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <i class="service-icon fa fa-magnet"></i>
              <section>
                <h4>Design+Code</h4>
                <p>Our designs are mobile-first, simple and get your point across quick. Our technology is robust and founded on Open Source and Continuous Integration principles. <br /><br />We &#9829; <a href="http://wordpress.org/" target="_blank">WordPress</a> and <a href="http://rubyonrails.org/" target="_blank">Ruby on Rails</a></p>
              </section>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <i class="service-icon fa fa-shield"></i>
              <section>
                <h4>Startup Consulting</h4>
                <p>Rock Solid can help your business innovate through custom made mobile or web apps - from strategy and user experience down to launch. We apply lean and agile principles that will help your new product succeed.</p>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Intro -->


  <div id="work" style="height:1000px;"></div>
    <div id="about" class="intro">
      
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h3>About</h3>
            <p class="lead">We're based in Hong Kong</p>
            <img src="/assets/img/me.jpg" class="img-circle img-responsive">
            <strong>Michiel Waaijer, Founder</strong>
            <p class="lead">Michiel is a seasoned digital professional that has seen it all. Having completed over 100 digital projects in his career - he's fluent in all aspects of digital communications and can give you a birds eye view of your digital strategy.</p>
          </div>
        </div>
      </div>
    </div>
   
  <div id="contact" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h3>Contact</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <p class="lead">
              <strong>New business enquiries:</strong>
              <a href="mailto:hello@rocksoliddigital.com">hello@rocksoliddigital.com</a>
              <em>Tel: <a class="tellink" href="tel:+85263375589">(852) 6337 5589</a></em>
            </p>
            <?=do_shortcode('[contact-form-7 id="24" title="Contact form 1"]');?>
          </div>
        </div>
        
      </div>
    </div>
    <!-- /Intro -->   
       
<?php get_footer(); ?>
