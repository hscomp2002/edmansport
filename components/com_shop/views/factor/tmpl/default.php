<?php
/**
* @version		$Id:default.php 1 2015-03-23 05:41:10Z  $
* @copyright	Copyright (C) 2015, . All rights reserved.
* @license 		
*/
// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<div class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>"><h2><?php echo $this->params->get('page_title');  ?></h2></div>
<h3><?php echo $this->item->id; ?></h3>
<div class="contentpane">
	<div><h4>Some interesting informations</h4></div>
		<div>
		Id: <?php echo $this->item->id; ?>
	</div>
		
		<div>
		Id: <?php echo $this->item->id; ?>
	</div>
		
		<div>
		User_id: <?php echo $this->item->user_id; ?>
	</div>
		
		<div>
		Tarikh: <?php echo $this->item->tarikh; ?>
	</div>
		
		<div>
		Id: <?php echo $this->item->id; ?>
	</div>
		
	</div>
 