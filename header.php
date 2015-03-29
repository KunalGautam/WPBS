<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

	<title><?php bloginfo( 'name' ); ?> <?php bloginfo( 'description' ); ?></title>


   <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css"/>
       <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.css" rel="stylesheet">

    
     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/html5shiv.js"></script>
      <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/respond.min.js"></script>
    <![endif]-->

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

  </head>

  
<body <?php body_class(); ?>> <!-- http://codex.wordpress.org/Template_Tags/body_class -->

<header id="header">
	

	 <nav class="navbar navbar-bg navbar-inverse navbar-fixed-top" role="navigation">
		<?php 
  // Fix menu overlap bug..
  if ( is_admin_bar_showing() ) echo '<div style="min-height: 28px;"></div>'; 
?>
  <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    </div>
<div id="navbar" class="navbar-collapse collapse">
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 5,
                'container'         => '',
                'container_class'   => '',
                'menu_class'        => 'nav navbar-nav no-float',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</div>
</nav>


</header>
<div class="container">



