<?php

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

// Register Custom pagination
require_once('wp-pagination.php');



?>
