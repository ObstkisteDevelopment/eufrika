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

<!--[if lte IE 6]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ieonly.css" rel="stylesheet" type="text/css" />
<?php if ($color=="personal") : ?>
<style type="text/css">
#line {
  width:98% ;
}
.logoheader {
  height:200px;
}
#header ul.menu {
  display:block !important;
  width:98.2% ;
}
</style>
<?php endif; ?>
<![endif]-->

<!--[if IE 7]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie7only.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script type="text/javascript">
  var big ='<?php echo (int)$this->params->get('wrapperLarge');?>%';
  var small='<?php echo (int)$this->params->get('wrapperSmall'); ?>%';
  var altopen='<?php echo JText::_('TPL_BEEZ2_ALTOPEN', true); ?>';
  var altclose='<?php echo JText::_('TPL_BEEZ2_ALTCLOSE', true); ?>';
  var bildauf='<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/plus.png';
  var bildzu='<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/minus.png';
  var rightopen='<?php echo JText::_('TPL_BEEZ2_TEXTRIGHTOPEN', true); ?>';
  var rightclose='<?php echo JText::_('TPL_BEEZ2_TEXTRIGHTCLOSE', true); ?>';
  var fontSizeTitle='<?php echo JText::_('TPL_BEEZ2_FONTSIZE', true); ?>';
  var bigger='<?php echo JText::_('TPL_BEEZ2_BIGGER', true); ?>';
  var reset='<?php echo JText::_('TPL_BEEZ2_RESET', true); ?>';
  var smaller='<?php echo JText::_('TPL_BEEZ2_SMALLER', true); ?>';
  var biggerTitle='<?php echo JText::_('TPL_BEEZ2_INCREASE_SIZE', true); ?>';
  var resetTitle='<?php echo JText::_('TPL_BEEZ2_REVERT_STYLES_TO_DEFAULT', true); ?>';
  var smallerTitle='<?php echo JText::_('TPL_BEEZ2_DECREASE_SIZE', true); ?>';
</script>

</head>
<body>

</body>
</html>
