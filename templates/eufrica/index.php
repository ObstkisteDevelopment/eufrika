<?php
/**
 * @package                Joomla.Site
 * @subpackage  Templates.eufrika
 * @copyright        Copyright (C) 2012 obstkiste.org All rights reserved.
 * @license                GNU General Public License version 2 or later; see LICENSE.txt
 */
?>
<!DOCTYPE html>
<html>
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
          <a href="#">
            <u class="language">F</u>rancais
          </a> - 
          <a href="#">
            <u class="language">E</u>nglish
          </a>
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
    <div class="delimiter"></div>
    <div class="main_frame">
      <div class="left_frame">
        <jdoc:include type="modules" name="content"
      </div>
      <aside id="sitebar">
        <jdoc:include type="modules" name="sitebar" />
      </aside>
    </div>

    <footer>

    </footer>
  </div>
</body>
</html>

