<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<strong><?php echo JText::_( 'More Articles...' ); ?></strong><br />
<?php foreach ($this->links as $link) : ?>
<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($link->slug, $link->catslug, $link->sectionid)); ?>"><?php echo $this->escape($link->title); ?></a><br />
<?php endforeach; ?>