<?php
/**
 * @package   Joomla.Site
 * @subpackage  com_content
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Create a shortcut for params.
$params = &$this->item->params;
$images = json_decode($this->item->images);
$canEdit  = $this->item->params->get('access-edit');
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.framework');

?>

<?php if ($this->item->state == 0) : ?>
<div class="system-unpublished">
<?php endif; ?>
<?php if ($params->get('show_title')) : ?>
  <h2>
    <?php if ($params->get('link_titles') && $params->get('access-view')) : ?>
      <a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid)); ?>">
      <?php echo $this->escape($this->item->title); ?></a>
    <?php else : ?>
      <?php echo $this->escape($this->item->title); ?>
    <?php endif; ?>
  </h2>
<?php endif; ?>

<?php if (!$params->get('show_intro')) : ?>
  <?php echo $this->item->event->afterDisplayTitle; ?>
<?php endif; ?>

<?php echo $this->item->event->beforeDisplayContent; ?>

<?php // to do not that elegant would be nice to group the params ?>

<div class="stdarticle_top">
  <?php $author = $this->item->created_by_alias ? $this->item->created_by_alias : $this->item->author; ?>
  <?php if (!empty($this->item->contactid) && $params->get('link_author') == true): ?>
  <?php
    $needle = 'index.php?option=com_contact&view=contact&id=' . $this->item->contactid;
    $menu = JFactory::getApplication()->getMenu();
    $item = $menu->getItems('link', $needle, true);
    $cntlink = !empty($item) ? $needle . '&Itemid=' . $item->id : $needle;
  ?>
    <?php echo JText::sprintf('%s', JHtml::_('link', JRoute::_($cntlink), $author)); ?>
  <?php else: ?>
    <?php echo JText::sprintf('%s', $author); ?>
  <?php endif; ?>
</div>
<div class="article_delimiter"></div>
<div class="stdarticle_bottom">
  <?php
    echo JText::sprintf('%s', JHtml::_('date', $this->item->publish_up, JText::_('d.m.Y')));
  ?>
</div>


<?php  if (isset($images->image_intro) and !empty($images->image_intro)) : ?>
  <?php $imgfloat = (empty($images->float_intro)) ? $params->get('float_intro') : $images->float_intro; ?>
  <div class="img-intro-<?php echo htmlspecialchars($imgfloat); ?>">
  <img
    <?php if ($images->image_intro_caption):
      echo 'class="caption"'.' title="' .htmlspecialchars($images->image_intro_caption) .'"';
    endif; ?>
    src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
  </div>
<?php endif; ?>
<?php echo $this->item->introtext; ?>

<?php if ($params->get('show_readmore') && $this->item->readmore) :
  if ($params->get('access-view')) :
    $link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));
  else :
    $menu = JFactory::getApplication()->getMenu();
    $active = $menu->getActive();
    $itemId = $active->id;
    $link1 = JRoute::_('index.php?option=com_users&view=login&Itemid=' . $itemId);
    $returnURL = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));
    $link = new JURI($link1);
    $link->setVar('return', base64_encode($returnURL));
  endif;
?>
    <p class="readmore">
        <a href="<?php echo $link; ?>">\
          <?php if (!$params->get('access-view')) :
            echo JText::_('COM_CONTENT_REGISTER_TO_READ_MORE');
          elseif ($readmore = $this->item->alternative_readmore) :
            echo $readmore;
            if ($params->get('show_readmore_title', 0) != 0) :
                echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
            endif;
          elseif ($params->get('show_readmore_title', 0) == 0) :
            echo JText::sprintf('COM_CONTENT_READ_MORE_TITLE');
          else :
            echo JText::_('COM_CONTENT_READ_MORE');
            echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
          endif; ?></a>
    </p>
<?php endif; ?>

<?php if ($this->item->state == 0) : ?>
</div>
<?php endif; ?>

<div class="item-separator"></div>
<?php echo $this->item->event->afterDisplayContent; ?>
