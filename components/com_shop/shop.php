<?php
/**
 * @version 0.0.1
 * @package    joomla
 * @subpackage Shop
 * @author	   	
 *  @copyright  	Copyright (C) 2015, . All rights reserved.
 *  @license 
 */

//--No direct access
defined('_JEXEC') or die('Resrtricted Access');

require_once JPATH_COMPONENT.'/helpers/route.php';

$controller = JControllerLegacy::getInstance('shop');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();