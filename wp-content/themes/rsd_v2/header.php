<? get_template_part('partials/_head'); ?>
<body <?php body_class($class); ?> data-spy="scroll" data-target="#main-nav" data-offset="70">
	<!--[if lt IE 8]><div class="alert alert-warning"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

	<!-- <header class="navbar navbar-inverse navbar-fixed-top" role="banner" >
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
	</header> -->
