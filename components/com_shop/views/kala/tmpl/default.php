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
<h3><?php echo $this->item->name; ?></h3>
<div class="contentpane">
	<div><h4>Some interesting informations</h4></div>
		<div>
		Id: <?php echo $this->item->id; ?>
	</div>
		
		<div>
		Name: <?php echo $this->item->name; ?>
	</div>
		
		<div>
		Toz: <?php echo $this->item->toz; ?>
	</div>
		
		<div>
		Tarikh_tolid: <?php echo $this->item->tarikh_tolid; ?>
	</div>
		
		<div>
		Tarikh_sabt: <?php echo $this->item->tarikh_sabt; ?>
	</div>
		
		<div>
		Tolid_konande: <?php echo $this->item->tolid_konande; ?>
	</div>
		
		<div>
		Vazn: <?php echo $this->item->vazn; ?>
	</div>
		
		<div>
		Abaad: <?php echo $this->item->abaad; ?>
	</div>
		
		<div>
		Mojoodi: <?php echo $this->item->mojoodi; ?>
	</div>
		
		<div>
		Ghimat: <?php echo $this->item->ghimat; ?>
	</div>
		
		<div>
		En: <?php echo $this->item->en; ?>
	</div>
		
		<div>
		Id: <?php echo $this->item->id; ?>
	</div>
		
	</div>
 