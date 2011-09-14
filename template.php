<?php
/**
 * @file
 * Contains theme override functions and preprocess functions for the Unimelb theme.
 *
 */
 
 
/**
 * Override or insert variables into the html template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
function unimelb_preprocess_html(&$variables, $hook) {
//dsm($variables);
	drupal_add_css(base_path().path_to_theme()."/css/custom.css", "external");
	drupal_add_css("http://brand.unimelb.edu.au/web-templates/1-0-0/css/complete.css", "external");
	drupal_add_js("http://brand.unimelb.edu.au/web-templates/1-0-0/js/complete.js", "external");
	drupal_add_js("http://brand.unimelb.edu.au/global-header/js/injection.js", "external");

	/* Classes */
	//add logo
	$variables['classes_array'][] = "no-logo";
	
	// add home if is front page
	if(drupal_is_front_page()) $variables['classes_array'][] = "home";
	
	//??? not sure what is headingblock
	$variables['classes_array'][] = "headingblock";


	
	/* */
	

}