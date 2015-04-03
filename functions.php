<?php
// Update Function
require_once('include/update.php');

// Register Custom Navigation Walker
require_once('include/wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

// Register Custom pagination
require_once('include/wp-pagination.php');



?>
