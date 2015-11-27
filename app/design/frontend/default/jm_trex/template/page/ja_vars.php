<?php
/*
 * ------------------------------------------------------------------------
 * JM Trex Theme Magento 1.8
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites:  http://www.joomlart.com -  http://www.joomlancers.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
*/

// no direct access
include_once (dirname(__FILE__).DS.'/includes/templatetools.php');

# BEGIN: TEMPLATE CONFIGURATIONS ##########
####################################
$_params = new JParameter();
#FONT SIZE DESCRIPTION
$_params->set('ja_font','3');//value from 1 to 6
#Color
$_params->set('ja_color','default');//default, red
#TEMPLATE WIDTH DESCRIPTION
$_params->set('ja_screen','wide');//narrow:Narrow Screen; wide:Wide Screen;
#MENU'S TYPE
$_params->set('ja_menu','css');//css:CSS Menu; moo:Moo Menu;

$_params->set('usertool_font', 2); //0: disable, 2: show font tools
$_params->set('usertool_color', 4); //0: disable, 4: show font tools
# END: TEMPLATE CONFIGURATIONS ##########

global $tmpTools;
if (defined('_DEMO_MODE_')) {
	$tmpTools = new JA_Tools('jm_trex', $_params, array(JA_TOOL_MENU, JA_TOOL_COLOR));	
	$tmpTools->checkHomepage();
} else {
	$tmpTools = new JA_Tools('jm_trex', $_params);
}

#Supported colors
$tmpTools->setColorThemes (array('default','blue','green','violet','yellow'));
?>
