<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>


<?php if ($this->checkSpotlight('spotlight-1', 'position-1, position-2, position-3')) : ?>
<!-- SPOTLIGHT 1 -->
<section class="ja-sl ja-sl-1">
  <?php 
  	$this->spotlight ('spotlight-1', 'position-1, position-2, position-3', array('row-fluid'=>1));
  ?>
</section>
<!-- //SPOTLIGHT 1 -->
<?php endif ?>