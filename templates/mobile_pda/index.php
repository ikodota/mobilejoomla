<?php
/**
 * Kuneri Mobile Joomla! for Joomla!1.5
 * http://www.mobilejoomla.com/
 *
 * @version		0.9.0
 * @license		http://www.gnu.org/licenses/gpl-2.0.htm GNU/GPL
 * @copyright	Copyright (C) 2008-2009 Kuneri Ltd. All rights reserved.
 */
defined( '_JEXEC' ) or die( 'Restricted access' );

defined( '_MJ' ) or die( 'Incorrect usage of Kuneri Mobile Joomla.' );

$MobileJoomla =& MobileJoomla::getInstance();    

$MobileJoomla->showXMLheader();
$MobileJoomla->showDocType();
$base = JURI::base () . "templates/" . $this->template;
?>

<html <?php echo $MobileJoomla->getXmlnsString(); ?>>
    <head>
        <?php $MobileJoomla->showHead(); ?>
        <style type="text/css" media="screen">@import "<?php echo $base;?>/resources/styles/reset.css";</style>
        <style type="text/css" media="screen">@import "<?php echo $base;?>/resources/styles/baseStyles.css";</style>
        <style type="text/css" media="screen">@import "<?php echo $base;?>/mj_xhtml.css";</style>
        <script type="text/javascript" src="<?php echo $base?>/resources/scripts/templates.js"></script>
        <script src="<?php echo $base?>/mj_xhtml.js" type="text/javascript" charset="utf-8"></script>
    </head>
    <body>
        <div id="wrap">
        
            <div id="header">
                <?php
                $modulepos = $MobileJoomla->getPosition('header');
                if ($modulepos && $this->countModules($modulepos) > 0):
                ?>
                    <div id="<?php echo $modulepos; ?>"><?php $MobileJoomla->loadModules($modulepos); ?></div>
                <?php
                endif;
                ?>
            </div>
            
            
            
            <?php
            $modulepos = $MobileJoomla->getPosition('header2');
            if ($modulepos && $this->countModules($modulepos) > 0):
            ?>
                <div id="<?php echo $modulepos; ?>"><?php $MobileJoomla->loadModules($modulepos); ?></div>
            <?php
            endif;
            ?>
            
            <div id="content">            


            <?php
            $modulepos = $MobileJoomla->getPosition('middle');
            if ($modulepos && $this->countModules($modulepos) > 0):
            ?>
                <div id="<?php echo $modulepos; ?>"><?php $MobileJoomla->loadModules($modulepos); ?></div>
            <?php
            endif;
            ?>
            
            <?php
            $MobileJoomla->showPathway();
            ?>

            <?php
            $modulepos = $MobileJoomla->getPosition('middle2');
            if ($modulepos && $this->countModules($modulepos) > 0 && (!$MobileJoomla->_ishomepage || $MobileJoomla->config['tmpl_iphone_componenthome'])):
            ?>
                <div id="<?php echo $modulepos; ?>"><?php $MobileJoomla->loadModules($modulepos); ?></div>
            <?php
            endif;
            ?>
            
            <?php
            $MobileJoomla->showMainBody();
            ?>

            <div class="top">
                <a href="#header">Back to the top</a>
            </div>

            <?php if (!$MobileJoomla->_ishomepage) { ?>
            <div class="home">
                <a href="<?php echo $this->baseurl?>">Home</a>
            </div>
            <?php } ?>
                    
            </div>            
            
            <div id="footer">
            
            <?php
            $modulepos=$MobileJoomla->getPosition('footer');
            if( $modulepos && $this->countModules($modulepos) > 0):
            ?>
                <div id="<?php echo $modulepos; ?>"><?php $MobileJoomla->loadModules($modulepos); ?></div>
            <?php
            endif;
            ?>
            
            <?php
            $MobileJoomla->showFooter();
            ?>
            
            <?php
            $modulepos=$MobileJoomla->getPosition('footer2');
            if ($modulepos && $this->countModules($modulepos) > 0):
            ?>
                <div id="<?php echo $modulepos; ?>"><?php $MobileJoomla->loadModules($modulepos); ?></div>
            <?php
            endif;
            ?>
                        
            </div>

        </div>
     
    </body>
</html>