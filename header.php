<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo( 'name' ); ?> <?php bloginfo( 'description' ); ?></title>

	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css"/>
<!-- Bootstrap -->
    <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.min.css" rel="stylesheet">

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
	<div id="info">
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name')?></a></h1>
		<p><?php bloginfo('description'); ?> </p>
	</div>

	<nav>

		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

	</nav>

</header>

<div id="main">
