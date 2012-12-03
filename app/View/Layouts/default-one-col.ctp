<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <?php echo $this->Html->charset(); ?>
        <title>
                <?php echo 'QuickTest' ?>:
                <?php echo $title_for_layout; ?>
        </title>
        <?php
                echo $this->Html->meta('icon');
                echo $scripts_for_layout;
                echo $this->Html->script('swfobject');
        
                //Framework CSS
                echo $this->Html->css('blueprint/screen.css', null, array('media' => 'screen, projection')); 
                echo $this->Html->css('blueprint/print.css', null, array('media' => 'print'));  
                
                //Import css fancy-lists plugin
                echo $this->Html->css('blueprint/plugins/fancy-lists/screen.css', null, array('media' => 'screen, projection')); 
                
                //Import css sprites plugin.    
                echo $this->Html->css('blueprint/plugins/sprites/sprite.css', null, array('media' => 'screen, projection'));            
                
                //Import css site plugin
                echo $this->Html->css('blueprint/plugins/site/screen.main.css', null, array('media' => 'screen, projection')); 
                echo $this->Html->css('blueprint/plugins/site/screen.tables.css', null, array('media' => 'screen, projection')); 
                echo $this->Html->css('blueprint/plugins/site/screen.forms.css', null, array('media' => 'screen, projection')); 
                echo $this->Html->css('blueprint/plugins/site/screen.navigation.css', null, array('media' => 'screen, projection')); 
        ?>
        <!--[if IE]>
        <?php
                echo $this->Html->css('blueprint/plugins/site/ie.css', null, array('media' => 'screen, projection')); 
                echo $this->Html->css('blueprint/ie.css', null, array('media' => 'screen, projection')); 
        ?>
        <![endif]-->
        
        <script type="text/javascript">
                swfobject.embedSWF("img/ads/banneralbrookinn.swf", "myad", "938", "90", "9.0.0");
        </script>

</head>
<body>
        <div id="main" class="container">
        
                <div id="header" class="span-24">
                        <?php echo $this->element('header'); ?>
                </div>
        
                <div id="ad-wide" class="span-24">
                        <div class="padder">
                                <div id="myad">
                                  &nbsp;
                                </div>  
                        </div>
                </div>  
        
                <div id="body" class="span-24">
                        <div id="content" class="span-24 last">
                                <?php echo $this->Session->flash(); ?>
                                <?php echo $content_for_layout; ?>
                        </div>
                </div>
        
                <div id="footer" class="span-24">
                        <?php echo $this->element('footer'); ?>
                </div>
        </div>
        
        <?php echo $this->element('sql_dump'); ?>
        
</body>
</html>
