<?php
if (!current_user_can('manage_options')) {
    wp_die('You do not have sufficient permissions to access this page.');
}
if ( is_admin() ){ 

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

function theme_options_init(){
	register_setting( 'WPBS', 'sample_theme_options', 'theme_options_validate' );
}

// Load up the menu page
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options For WPBS', 'WPBS' ), __( 'WPBS Theme Options', 'WPBS' ), 'edit_theme_options', 'theme_options', 'theme_options_display' );
	add_menu_page( "Setting For WPBS", "WPBS", "manage_options", "wpbs", "theme_option_display_home", "dashicons-carrot", "58" );
	add_submenu_page( "wpbs", "WPBS Version Check", "Version", "manage_options", "wpbsversioncheck", "wpbs_version_check" );
}

function theme_options_display() {
	?>
	
	
	<div class="wrap">
<h2>Welcome to WPBS.</h2>
<p>This is placeholder for Theme Setting.</p>	
<?php
	}// End of theme_option_add_page
	
function theme_option_display_home() {
	include("home.php");
}	

function wpbs_version_check() {
	include("version.php");
}	
	
	
}//End of If admin function



?>
