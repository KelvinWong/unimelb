<?php
	/**
	 * @file
	 * Default theme implementation to display the basic html structure of a single
	 * Drupal page.
	 *
	 * Variables:
	 * - $css: An array of CSS files for the current page.
	 * - $language: (object) The language the site is being displayed in.
	 *   $language->language contains its textual representation.
	 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
	 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
	 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
	 * - $head_title: A modified version of the page title, for use in the TITLE
	 *   tag.
	 * - $head_title_array: (array) An associative array containing the string parts
	 *   that were used to generate the $head_title variable, already prepared to be
	 *   output as TITLE tag. The key/value pairs may contain one or more of the
	 *   following, depending on conditions:
	 *   - title: The title of the current page, if any.
	 *   - name: The name of the site.
	 *   - slogan: The slogan of the site, if any, and if there is no title.
	 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
	 *   so on).
	 * - $styles: Style tags necessary to import all CSS files for the page.
	 * - $scripts: Script tags necessary to load the JavaScript files and settings
	 *   for the page.
	 * - $page_top: Initial markup from any modules that have altered the
	 *   page. This variable should always be output first, before all other dynamic
	 *   content.
	 * - $page: The rendered page content.
	 * - $page_bottom: Final closing markup from any modules that have altered the
	 *   page. This variable should always be output last, after all other dynamic
	 *   content.
	 * - $classes String of classes that can be used to style contextually through
	 *   CSS.
	 *
	 * @see template_preprocess()
	 * @see template_preprocess_html()
	 * @see template_process()
	 */
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php print $head_title; ?></title>  
<!-- SEO relevant meta data to describe content of page -->
  <meta name="DC.Title" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="DC.Description" content="">
<!-- End SEO relevant meta data -->
<!-- Authoriser and maintainer related meta data - developers, don't forget humans.txt   -->
  <meta name="DC.Creator" content="The University of Melbourne">
  <meta name="DC.Contributor" content="">
  <meta name="author" content="">
  <meta name="UM.Authoriser.Name" content="">
  <meta name="UM.Authoriser.Title" content="">
  <meta name="UM.Maintainer.Name" content="">
  <meta name="UM.Maintainer.Department" content="">
  <meta name="UM.Maintainer.Email" content="">
<!-- End authoriser and maintainer meta data -->
<!-- Static meta data   -->
  <meta name="DC.Rights" content="http://www.unimelb.edu.au/disclaimer">
  <meta name="DC.Publisher" content="The University of Melbourne">
  <meta name="DC.Format" content="text/html">
  <meta name="DC.Language" content="en">
  <meta name="DC.Identifier" content="http://www.unimelb.edu.au/">
<!-- End static meta data -->
<!-- Meta data to be autofilled -->
  <meta name="DC.Date" content="">
  <!--#config timefmt="%Y-%m-%d" --><meta name="DC.Date.Modified" content="<!--#echo var='LAST_MODIFIED' -->">
<!-- End meta data to be autofilled -->
  <meta content="width=device-width; initial-scale=0.67;" name="viewport">

  <?php print $styles; ?>
  <?php print $scripts; ?>



</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
	<?php print $page_top; ?>
	<?php print $page; ?>
    <?php print $page_bottom; ?> 
</body>
</html>
