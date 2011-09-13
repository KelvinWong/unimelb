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
	drupal_add_css("http://brand.unimelb.edu.au/web-templates/1-0-0/css/complete.css", "external");

}