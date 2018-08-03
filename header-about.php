<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="author" content="jMrL">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/static/man_with_beard_icon.ico">

    <title>
      <?php bloginfo('name') ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
      </title>
  <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/mdb.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/yolo-style.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <!-- <link href="{% static 'vendor/font-awesome/css/font-awesome.min.css' %}" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <?php wp_head(); ?> 
  </head>
<!-- FB SDK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=551603758344185';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- END OF FB SDK -->

  <body >
  <!-- Navigation -->
   <!-- <nav style="background-color:white;color:black;" class="navbar navbar-expand-lg fixed-top top-nav-fat" id="main-navigation" >
      <div class="container ">
        <a class="navbar-brand " href="{% url 'home' %}"> <img class="nav-img" src="<?php //bloginfo('template_url'); ?>/img/static/man_with_beard_icon.jpg"> YoloDigi</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{% url 'home' %}">Home</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link" href="{% url 'about' %}">Tutorials</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{% url 'about' %}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{% url 'contact' %}">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->


  <nav class="navbar navbar-expand-md navbar-light bg-white" role="navigation">
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-controls="bs-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="#"><img class="nav-img" src="<?php bloginfo('template_url'); ?>/img/static/man_with_beard_icon.jpg"> YoloDigi</a>
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-navbar-collapse',
			'menu_class'        => 'nav navbar-nav mr-auto',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
	</div>
</nav>
<!--  MAIN  -->
<section class="section extra-margins listing-section justify-content-center">

  <header class="row mb-5">
      <div class="col-md-12">
          <div class="head" style="opacity: 0.8;background-color: rgba(0,0,0,0.5); background-image: url('<?php bloginfo('template_url'); ?>/img/learn-with-us.jpg'); ">
              <div class="text-center rgba-stylish-strong py-5 px-4">
                  <div class="py-5">
    
                      <!--Content-->
                          <h1 id="header-title" style="font-weight:700;font-size:4em;" class="pt-3 mb-5 text-white header-title"><?php wp_title(''); ?></h1>
                          <p style="font-weight:500;font-size:1.5em;" class="px-5 pb-4 text-white">Our Mission and Creed</p>
                          <!-- <a class="btn peach-gradient text-white"><i class="fa fa-clone left"></i> View project</a> -->
                      <!--Content-->
    
                  </div>
              </div>
          </div>
      </div>
    </header>
    
  <!-- {% endblock header %} -->
    </section>