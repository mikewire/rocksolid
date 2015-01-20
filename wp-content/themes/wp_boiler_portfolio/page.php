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
          <h1><small>Nice to meet you.</small>We're <i>RockSolid</i></h1>
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
            <h2>We create digital solutions for companies in the hospitality industry</h2>
            <p class="lead">Our focus is on creating custom digital solutions for hotels, restaurants and other hospitality-led businesses. We set ourselves apart from other digital agencies by exclusively working with great hospitality clients and applying our in-depth industry experience.</p>
            <!-- <p class="lead">We focus on building products and digital experiences that are rooted in commercial benefits for your business: whether that is increased guest / customer satisfaction or a greater conversion rate on your websites.</p> -->
					</div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="service-item">
              <i class="service-icon fa fa-road "></i>
              <section>
                <h4>Digital Strategy</h4>
                <p>We can help you define a digital strategy that goes beyond "just" a new website. Sure a website is important, but have you considered your entire digital presence? We can help you build a digital strategy with creative ideas that will leave the competition trailing.</p>
              </section>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="service-item">
              <i class="service-icon fa fa-code"></i>
              <section>
                <h4>Design+Code</h4>
                <p>Our designs are mobile-first, simple and get your point across quick. Our technology is robust and founded on Open Source and Continuous Integration principles. <br /><br />We &#9829; <a href="http://wordpress.org/" target="_blank">WordPress</a></p>
              </section>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="service-item">
              <i class="service-icon fa fa-rocket "></i>
              <section>
                <h4>Product development & Startup Consulting</h4>
                <p>Rock Solid can help your business innovate through custom made mobile or web apps - from strategy and user experience down to launch. We apply lean and agile principles that will help your new product succeed.</p>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Intro -->

    <!-- work -->
    <div id="work" class="intro">

      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>Our Clients</h3>

            <p class="lead">Our work ranges from website design & development, wordpress development, product development, startup consulting, digital strategy and much more. The common threads are that people love to use our creations and our clients are happy.</p>
          </div>
        </div>

        <div class="row work-item" id="ec">
          <div class="col-md-8 work-view">
            <? if (is_mobile() || is_tablet()) : ?>
              <img src="/assets/img/imac2-mobile.jpg" />
            <? else : ?>
              <![if (!IE) | (gte IE 9)]>
              <img src="/assets/img/imac2.png" />
              <video width="640" height="360" autoplay loop>
                <source src="/assets/video/ec.mp4" type="video/mp4" />
                <source src="/assets/video/ec.ogv" type="video/ogg" />
                <source src="/assets/video/ec.webm" type="video/webm" />
              </video>
              <![endif]>
              <!--[if (IE) & (lt IE 9)]>
                <img src="/assets/img/imac2-mobile.jpg" />
              <![endif]-->
            <? endif; ?>
          </div>
          <div class="col-md-4">
            <strong>Event Cinemas</strong>
            <p class="lead">Rock Solid's team was responsible for the redesign of the website for Event Cinemas; Australia's biggest cinema chain. The website features a clean full screen image approach letting the movies stand out. The results were outstanding with customers being thrilled with the new design. We also created a social mashup to aggregate Event's social media activity.
              <br /><br /><a href="www.eventcinemas.com.au" target="_blank">Visit the website &rarr;</a>
              <br /><a href="social.eventcinemas.com.au" target="_blank">Visit the social hub &rarr;</a>
            </p>
          </div>
        </div>

        <div class="row work-item" id="qtsydney">

          <div class="col-md-6">
            <strong>Interactive Elevator <br />@ QT Sydney</strong>
            <p class="lead">This much talked about interactive installation was the brainchild of Rock Solid. It's elevator music on steroids, playing music according to the number of people in the lift. If you're by yourself you'll be serenated by Elvis' "Are you lonesome tonight" while 5 or more people will dance to the tune of Lady Gaga. Our installation has helped <a href="http://www.qtsydney.com.au" target="_blank">QT Sydney</a> to become the talk of the town since its opening.
            <br /><br /><a href="http://www.lodgingmagazine.com/qt-sydneys-new-take-on-elevator-music/" target="_blank">Check out one of the many news articles &rarr;</a>
          </p>
          </div>

          <div class="col-md-6 work-view">
            <!-- <iframe width="560" height="315" src="//www.youtube.com/embed/rYWsdYIbUVs?rel=0" frameborder="0" allowfullscreen></iframe>    -->
          <iframe src="//player.vimeo.com/video/50911848?title=0&amp;byline=0&amp;portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>



        </div>

        <div class="row work-item" id="twocents">
          <div class="col-md-8 work-view">
            <img src="/assets/img/twocents.png" />
          </div>
          <div class="col-md-4">
            <strong>TwoCents</strong>
            <p class="lead">2Cents is a startup product being developed by the team at Rock Solid. It's a micro-feedback platform for hotels and restaurants to gain deeper insight into customer satisfaction. <br /><br /><a href="http://2cents.io">Visit the website &rarr;</a></p>
          </div>
        </div>

        <div class="row work-item" id="atura">

          <div class="col-md-4">
            <? if (is_mobile()) : ?>
              <img src="/assets/img/iphone-mobile.png" />
            <? endif; ?>
            <strong>Atura Hotels</strong>
            <? if (is_tablet()) : ?>
              <img style="float:left;" src="/assets/img/iphone-mobile.png" />
            <? endif; ?>

            <p class="lead">The team at Rock Solid created a beautiful responsive website for a new hotel brand in Australia called Atura. As the hotel targets young travellers we intentionally adopted a mobile first approach, making the mobile and tablet sites our highest priority. We handled everything from user experience design down to the development in WordPress. <br /><br /><a href="http://www.aturablacktown.com.au">Visit the website &rarr;</a></p>
          </div>

          <div class="col-md-8 work-view">
          <? if (!is_mobile() && !is_tablet()) : ?>
              <![if (!IE) | (gte IE 9)]>
                <img class="ipad-mini" src="/assets/img/ipad-mini-atura.png" />
                <img class="iphone" src="/assets/img/iphone.png" />
                <video width="636" height="1128" autoplay loop>
                  <source src="/assets/video/atura.mp4"  type="video/mp4" />
                  <source src="/assets/video/atura.ogv"  type="video/ogg" />
                  <source src="/assets/video/atura.webm"  type="video/webm" />
                </video>
              <![endif]>
              <!--[if (IE) & (lt IE 9)]>
                <img class="ipad-mini" src="/assets/img/ipad-mini-atura.png" />

              <![endif]-->

          <? endif; ?>
          </div>
        </div>

        <div class="row conclusion text-center">

          <div class="col-md-12">
            <strong>We have lots more to show you!</strong>
            <p class="lead">But why not do that over some coffee? <a href="#contact">Get in touch to set up a chat</a></p>
          </div>

        </div>



      </div>
    </div>
    <!-- /Intro -->

    <div id="about" class="intro">

      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h3>About</h3>
            <p class="lead">We're based in the business centre of Asia: Hong Kong. Rock Solid is on a mission to improve the quality of websites and digital products that originate here in Asia. Still this part of the world is playing catch-up to Europe and the US, but it doesn't have to be that way. More and more brands are ready to move their business into the digital world. This is why we exist, to help those future thinking companies to a rock solid digital partner.</p>
            <img src="/assets/img/me2.jpg" class="img-circle img-responsive">
            <strong>Michiel Waaijer, Founder</strong>
            <p class="lead">Equiped with a MSc in Media Technology and a Masters in Business Administration (MBA), Michiel is a seasoned digital professional who worked in creative agencies for nearly a decade before starting Rock Solid. He likes good coffee and sci-fi movies like Pacific Rim (and is not afraid to admit it).</p>
          </div>
        </div>
      </div>
    </div>

 <!-- Intro -->
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
              <!-- <a href="mailto:hello@rocksoliddigital.com">hello@rocksoliddigital.com</a> -->
              <em>Tel: <a class="tellink" href="tel:+85263375589">(852) 6337 5589</a></em>
            </p>
            <?=do_shortcode('[contact-form-7 id="24" title="Contact form 1"]');?>
          </div>
        </div>

      </div>
    </div>
    <!-- /Intro -->

<?php get_footer(); ?>
