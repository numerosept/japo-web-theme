<?php
// This file handles the admin area and functions - You can use this file to make changes to the dashboard.

/************* DASHBOARD WIDGETS *****************/
// Disable default dashboard widgets
function disable_default_dashboard_widgets() {
	 Remove_meta_box('dashboard_right_now', 'dashboard', 'core');    // Right Now Widget
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core'); // Comments Widget
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');  // Incoming Links Widget
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');         // Plugins Widget

	// Remove_meta_box('dashboard_quick_press', 'dashboard', 'core');  // Quick Press Widget
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');   // Recent Drafts Widget
	remove_meta_box('dashboard_primary', 'dashboard', 'core');         //
	remove_meta_box('dashboard_secondary', 'dashboard', 'core');       //

	// Removing plugin dashboard boxes
	remove_meta_box('yoast_db_widget', 'dashboard', 'normal');         // Yoast's SEO Plugin Widget

}

/*
For more information on creating Dashboard Widgets, view:
http://digwp.com/2010/10/customize-wordpress-dashboard/
*/


// removing the dashboard widgets
add_action('admin_menu', 'disable_default_dashboard_widgets');
// adding any custom widgets
remove_action('welcome_panel', 'wp_welcome_panel');

/************* CUSTOMIZE ADMIN *******************/

/*cache certains éléments du menu de l'admin*/
function remove_menus(){
  
  remove_menu_page( 'edit.php' );   //Posts
  remove_menu_page( 'index.php' );  //Dashboard 
  remove_menu_page( 'edit-comments.php' );          //Comments
               
  
}
add_action( 'admin_menu', 'remove_menus' );


/* fin cache certains éléments du menu de l'admin*/
// Custom Backend Footer
function joints_custom_admin_footer() {
	_e('<span id="footer-thankyou">Developed by <a href="#" target="_blank">Your Site Name</a></span>.', 'jointswp');
}



// adding it to the admin area
add_filter('admin_footer_text', 'joints_custom_admin_footer');


//menu des options du thème

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Reglages JAPO',
		'menu_title'	=> 'Réglage du site',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position' => 30
	));	
}