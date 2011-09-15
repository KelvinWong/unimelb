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
	drupal_add_js("http://brand.unimelb.edu.au/global-header/js/injection.js", "external");

	/* Classes */
	//add logo
	$variables['classes_array'][] = "no-logo";
	
	// add home if is front page
	if(drupal_is_front_page()) $variables['classes_array'][] = "home"; else $variables['classes_array'][] = "blue";
	
	//??? not sure what is headingblock
	$variables['classes_array'][] = "headingblock";
	
	
	/* */

}


/**
 * Override theme_status_messages to suit the stlye and classes in unimelb template
 * 
 * Original template
 * http://api.drupal.org/api/drupal/includes--theme.inc/function/theme_status_messages/7
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 */
function unimelb_status_messages($variables) {
  $display = $variables['display'];
  $output = '';

  $status_heading = array(
    'status' => t('Status message'), 
    'error' => t('Error message'), 
    'warning' => t('Warning message'),
  );
  foreach (drupal_get_messages($display) as $type => $messages) {
    $output .= "<div class=\"message $type\">\n";
    if (!empty($status_heading[$type])) {
      $output .= '<p><strong>' . $status_heading[$type] . "</strong></p>\n";
    }
    if (count($messages) > 1) {
      $output .= " <ul>\n";
      foreach ($messages as $message) {
        $output .= '  <li>' . $message . "</li>\n";
      }
      $output .= " </ul>\n";
    }
    else {
      $output .= $messages[0];
    }
    $output .= "</div>\n";
  }
  return $output;
}