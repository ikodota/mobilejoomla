<?php
/**
 * ###DESC###
 * ###URL###
 *
 * @version		###VERSION###
 * @license		###LICENSE###
 * @copyright	###COPYRIGHT###
 * @date		###DATE###
 */
defined('_JEXEC') or die('Restricted Access');

$document =& JFactory::getDocument();
$lang =& JFactory::getLanguage();
$version = new JVersion();

$document->addStyleSheet(JURI::base().'modules/mod_mj_adminicon/css/mod_mj_adminicon.css');
$lang->load('com_mobilejoomla', JPATH_ADMINISTRATOR);

if(substr($version->getShortVersion(),0,3) == '1.6')
	$extra = 'icon16';
else
	$extra = 'icon15';

include_once JPATH_ADMINISTRATOR.DS.'components'.DS.'com_mobilejoomla'.DS.'admin.mobilejoomla.html.php';
HTML_MobileJoomla::CheckForUpdate();
?>
<div id="mjicon">
	<div style="float:<?php echo ($lang->isRTL()) ? 'right' : 'left'; ?>;">
		<div class="icon <?php echo $extra; ?>">
			<a href="index.php?option=com_mobilejoomla">
				<img src="modules/mod_mj_adminicon/images/icon-48.png" />
				<span><?php echo JText::_('COM_MJ__MOBILEJOOMLA'); ?></span>
			</a>
		</div>
	</div>
	<div id="mjupdate" style="float:<?php echo ($lang->isRTL()) ? 'right' : 'left'; ?>;">
		<div class="icon <?php echo $extra; ?>">
			<a href="http://www.mobilejoomla.com/download.html" target="_blank">
				<img src="modules/mod_mj_adminicon/images/icon-48.png" />
				<span><?php echo JText::_('COM_MJ__UPDATE_AVAILABLE'); ?></span>
			</a>
		</div>
	</div>
</div>