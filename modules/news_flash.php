<?php
/**
 * @package   Joomla.Site
 * @subpackage  mod_articles_latest
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<section id="news_flash">
  <h3 class="module_title">News</h3>
  <div class="sitebar_delimiter"></div>
  <ul class="latestnews<?php echo $moduleclass_sfx; ?>">
  <?php foreach ($list as $item) :  ?>
    <li>
      <?php echo $item->category; ?>
      <a href="<?php echo $item->link; ?>">
        <?php echo $item->title; ?></a>
      <img src="<?php echo $this->baseurl ?>/images/arrows/news_arrow.jpg" />
    </li>
  <?php endforeach; ?>
  </ul>
</section>