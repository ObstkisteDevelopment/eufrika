<?php
/**
 * @package   Joomla.Site
 * @subpackage  mod_falang
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('stylesheet', 'mod_falang/template.css', array(), true);

?>
<div class="mod-languages<?php echo $moduleclass_sfx ?>">
<?php if ($headerText) : ?>
  <div class="pretext"><p><?php echo $headerText; ?></p></div>
<?php endif; ?>

<?php if ($params->get('dropdown',1)) : ?>
  <form name="lang" method="submit">
  <select class="inputbox" onchange="document.location.replace(this.value);" >
  <?php foreach($list as $language):?>
    <option value="<?php echo $language->link;?>" <?php echo !empty($language->active) ? 'selected="selected"' : ''?>><?php echo $language->title_native;?></option>
  <?php endforeach; ?>
  </select>
  </form>
<?php else : ?>
  <ul class="<?php echo $params->get('inline', 1) ? 'lang-inline' : 'lang-block';?>">
  <?php foreach($list as $language):?>
    <?php if ($params->get('show_active', 0) || !$language->active):?>
      <li class="<?php echo !empty($language->active) ? 'lang-active' : '';?>">
      <a href="<?php echo $language->link;?>">
        <span>
          <?php if ($params->get('image', 1)):?>
            <?php echo JHtml::_('image', 'mod_falang/'.$language->image.'.gif', $language->title_native, array('title'=>$language->title_native), true);?>
          <?php else : ?>
            <?php echo $params->get('full_name', 1) ? $language->title_native : strtoupper($language->sef);?>
          <?php endif; ?>
        </span>
      </a>
      </li>
    <?php endif;?>
  <?php endforeach;?>
  </ul>
<?php endif; ?>

<?php if ($footerText) : ?>
  <div class="posttext"><p><?php echo $footerText; ?></p></div>
<?php endif; ?>
</div>