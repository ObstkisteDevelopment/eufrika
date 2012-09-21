<?php
/**
 * @package                Joomla.Site
 * @subpackage  Templates.eufrika
 * @copyright        Copyright (C) 2012 obstkiste.org All rights reserved.
 * @license                GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" ]lang="<?php echo $this->language; ?>">
<head>
  <jdoc:include type="head" /> 
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/eufrika.org/css/template.css" type="text/css" />
</head>
<body>
  <div class="top_border"></div>
  <div class="container">
    <nav id="static">
       <jdoc:include type="modules" name="static-menue" />
    </nav>
    <div class="header_container">
      <header id="eufrika_logo">
      </header>
      <div class="left_bar">
        <nav id="language_selector">
          <jdoc:include type="modules" name="language_selector" />
        </nav>
        <br />
        <div class="social_search_container">
          <div class="social_networks">
            FOLLOW US:
          </div>
          <br />
          <div class="searchform">
            <form>
              <input type="search" placeholder="Search.." />
              <input style="display: none;" type="submit" value="search" />
            </form>
          </div>
        </div>
      </div>
    </div>
    <nav id="mainmenue">
      <jdoc:include type="modules" name="main-menue" />
    </nav>
    <div class="nav_delimiter"></div>
    <div class="main_frame">
      <div class="left_frame">
        <jdoc:include type="modules" name="content_top" />
        <jdoc:include type="component" />
        <jdoc:include type="modules" name="content_top" />
      </div>
      <aside id="sitebar">
        <jdoc:include type="modules" name="sitebar" />
      </aside>
      <br style="clear: both;" />
    </div>

    <div class="footer_container">
      <div class="top_link">
        <img src="<?php echo $this->baseurl ?>/templates/eufrika.org/images/arrows/top_arrow.jpg" />
        <a href="javascript:window.scrollTo(0,0);">Top</a>
      </div>
      <br style="clear: both;" />
      <footer>
        <div class="footer_content">
          <jdoc:include type="modules" name="footer_content" />
        </div>
        <div class="copyright">
          <jdoc:include type="modules" name="copyright" />
        </div>
      </footer>
    </div>
  </div>
</body>
</html>

