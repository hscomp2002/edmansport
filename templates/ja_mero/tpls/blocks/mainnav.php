<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- MAIN NAVIGATION -->
<nav id="ja-mainnav" class="wrap ja-mainnav navbar-collapse-fixed-top">
  <div class="container navbar">
    <div class="navbar-inner">

      <div class="row">
    	  <div class="span9" data-xtablet="span12">
          
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="nav-collapse collapse<?php echo $this->getParam('navigation_collapse_showsub', 1) ? ' always-show' : '' ?>">
            <?php if ($this->getParam('navigation_type') == 'megamenu') : ?>
              <?php $this->megamenu($this->getParam('mm_type', 'mainmenu')) ?>
            <?php else : ?>
              <jdoc:include type="modules" name="<?php $this->_p('mainnav') ?>" style="raw" />
            <?php endif ?>
      	  </div>
        </div>

        <?php if ($this->countModules('head-search')) : ?>
        <!-- HEAD SEARCH -->
        <div class="span3">
          <div class="head-search">
            <jdoc:include type="modules" name="<?php $this->_p('head-search') ?>" style="raw" />
          </div>
        </div>
        <!-- //HEAD SEARCH -->
        <?php endif ?>
      </div>

    </div>
  </div>
</nav>
<!-- //MAIN NAVIGATION -->