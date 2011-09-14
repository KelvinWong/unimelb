<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Dynamic help text, mostly for admin pages.
 * - $page['headingtext']: Items for the highlighted content region.
 * - $page['newsbanner']: The main content of the current page.
 * - $page['content']: Items for the first sidebar.
 * - $page['aside']: Items for the second sidebar.
 * - $page['footer']: Items for the header region.
 * - $page['footernav']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

  <div class="wrapper">
	
    <div class="header">

      <div class="hgroup">
        <!-- <p><a href="#">The Faculty of Bar</a></p> -->
        <h1><?php print $site_name; ?></h1>
      </div>
      <div id="headingtext">
	    <?php print render($page['headingtext']); ?>
        <hr>
      </div>
    </div>

    <div id="newsbanner">
      <div id="banner-clip">
        <div id="banner-wrapper">
          <div class="banner">
            <a href="http://newsroom.melbourne.edu/studio/ep-92"><img src="<?php print base_path().path_to_theme()."/images/page-preview.png"; ?>" height="100%" width="100%" alt="newsbanner feature"></a>
            <div class="banner-text">
              <h2><a href="http://newsroom.melbourne.edu/studio/ep-92">Graduate Access Melbourne</a></h2>
              <p><a href="http://newsroom.melbourne.edu/studio/ep-92">From February 22–25<br>
                Get involved, get connected</a></p>
            </div>
          </div>
          <div class="banner">
            <a href="http://newsroom.melbourne.edu/studio/ep-91"><img src="<?php print base_path().path_to_theme()."/images/page-preview.png"; ?>" height="100%" width="100%" alt="newsbanner feature"></a>
            <div class="banner-text">
              <h2><a href="http://newsroom.melbourne.edu/studio/ep-91">Orientation 2011</a></h2>
              <p><a href="http://newsroom.melbourne.edu/studio/ep-91">From January 22–25<br>
                Come and explore our campus</a></p>
            </div>
          </div>
          <div class="banner">
            <a href="http://newsroom.melbourne.edu/studio/ep-90"><img src="<?php print base_path().path_to_theme()."/images/page-preview.png"; ?>" height="100%" width="100%" alt="newsbanner feature"></a>
            <div class="banner-text">
              <h2><a href="http://newsroom.melbourne.edu/studio/ep-90">Committed to Excellence</a></h2>
              <p><a href="http://newsroom.melbourne.edu/studio/ep-90">From March 22–25<br>
                We really are committed to excellence</a></p>
            </div>
          </div>
          <div class="banner">
            <a href="http://newsroom.melbourne.edu/studio/ep-90"><img src="<?php print base_path().path_to_theme()."/images/page-preview.png"; ?>" height="100%" width="100%" alt="newsbanner feature"></a>
            <div class="banner-text">
              <h2><a href="http://newsroom.melbourne.edu/studio/ep-90">Go Triple Helix</a></h2>
              <p><a href="http://newsroom.melbourne.edu/studio/ep-90">From April 22–25<br>
               DNA is useful</a></p>
            </div>
          </div>
        </div>
      </div>
      <ol>
        <li><a href="http://newsroom.melbourne.edu/studio/ep-92" tabindex="-1">Graduate Access Melbourne</a></li>
        <li><a href="http://newsroom.melbourne.edu/studio/ep-91" tabindex="-1">Orientation 2011</a></li>
        <li><a href="http://newsroom.melbourne.edu/studio/ep-90" tabindex="-1">Committed to Excellence</a></li>
        <li><a href="http://newsroom.melbourne.edu/studio/ep-89" tabindex="-1">Graduate Expo 2011</a></li>
      </ol>
    </div>

    <div class="main col-6" id="main-content" role="main">
      <h2>Our Programs</h2>

        <!-- <div class="col-6 first pullout">
          <ul class="col-2 first">
            <li><a href="#">Master of <strong>Foo</strong></a></li>
            <li><a href="#">Doctor of <strong>Optometry</strong></a></li>
            <li><a href="#">Master of <strong>Philosophy</strong></a></li>
            <li><a href="#">Doctor of <strong>Philosophy</strong> (PhD)</a></li>
          </ul>
          <ul class="col-2">
            <li><a href="#">Master of <strong>Foo</strong></a></li>
            <li><a href="#">Doctor of <strong>Optometry</strong></a></li>
            <li><a href="#">Master of <strong>Philosophy</strong></a></li>
            <li><a href="#">Doctor of <strong>Philosophy</strong> (PhD)</a></li>
          </ul>
          <ul class="col-2">
            <li><a href="#">Master of <strong>Foo</strong></a></li>
            <li><a href="#">Doctor of <strong>Optometry</strong></a></li>
            <li><a href="#">Master of <strong>Philosophy</strong></a></li>
            <li><a href="#">Doctor of <strong>Philosophy</strong> (PhD)</a></li>
          </ul>
        </div> -->


      <div class="col-2 first page-preview">
        <img src="./<?php print base_path().path_to_theme()."/images/page-preview.png"; ?>" alt="">
        <h2>Meet our students</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        <a href="#" class="button">Read more</a></p>

        <img src="./<?php print base_path().path_to_theme()."/images/page-preview.png"; ?>" alt="">
        <h2>Meet our students</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        <a href="#" class="button">Read more</a></p>
      </div>
      <div class="col-2 page-preview">
        <img src="./<?php print base_path().path_to_theme()."/images/page-preview.png"; ?>" alt="">
        <h2>Meet our students</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        <a href="#" class="button">Read more</a></p>

        <img src="./<?php print base_path().path_to_theme()."/images/page-preview.png"; ?>" alt="">
        <h2>Meet our students</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        <a href="#" class="button">Read more</a></p>
      </div>
      <div class="col-2 page-preview">
        <img src="./<?php print base_path().path_to_theme()."/images/page-preview.png"; ?>" alt="">
        <h2>Meet our students</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        <a href="#" class="button">Read more</a></p>

        <img src="./<?php print base_path().path_to_theme()."/images/page-preview.png"; ?>" alt="">
        <h2>Meet our students</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        <a href="#" class="button">Read more</a></p>
      </div>
    </div>

    <div class="aside col-2">
      <h2>Opening hours</h2>
      <blockquote class="opening-hours">
        <p>We are open from 8.45am until 3pm Monday to Friday, or by appointment with an advisor.</p>
      </blockquote>
      <h2>News &amp; information</h2>
      <ul class="news">
        <li><a href="#">Our partners in Japan</a> <span class="timestamp">Jul 14, 2010</span></li>
        <li><a href="#">Our partners in Solo</a> <span class="timestamp">Jul 12, 2010</span></li>
      </ul>
    </div>
    <hr>
  </div>
  <hr>
  <div class="footer">
    <div id="local" class="wrapper">
      <p class="footertitle">The Graduate School of Foo</p>
      <div id="org-details" class="col-2">
        <p><strong>The Faculty of Bar</strong></p>
        <p class="location">Level 4, 198 Berkely Street <br> The University of Melbourne <br>Parkville 3010 VIC Australia</p>
      </div>

      <ul class="col-2">
        <li><strong>Phone:</strong> +61 3 8344 1670</li>
        <li><strong>Fax:</strong> +61 3 8344 1670</li>
        <li><strong>Email:</strong> <a href="#">Make an enquiry</a></li>
        <li class="social"><a class="facebook" href="#">Facebook</a> <a class="twitter" href="#">Twitter</a></li>
      </ul>

      <ul class="col-2">
        <li><strong>Authoriser:</strong>
          <br>Communcations Manager</li>
        <li><strong>Maintainer:</strong><br>
          Pat Doe, Faculty of Bar</li>
      </ul>

      <ul class="col-2">
        <li><strong>Date created:</strong><br>
          11 February 2010</li>
        <li><!--#config timefmt="%d %B %Y %H:%M:%S" --><strong>Last modified:</strong><br>
			<!--#echo var="LAST_MODIFIED" --></li>
      </ul>
      <hr>
    </div>
    <hr>
  </div>