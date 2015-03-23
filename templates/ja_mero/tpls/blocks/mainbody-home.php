<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Mainbody 3 columns, content in left, mast-col on top of 2 sidebars: content - sidebar1 - sidebar2
 */
defined('_JEXEC') or die;
?>

<?php

  // Layout configuration
  $layout_config = json_decode ('{
    "one_sidebar": {
      "default" : [ "span9"         , "span3"            ],
      "wide"    : [],
      "xtablet" : [ "span12"        , "span12 spanfirst" ],
      "tablet"  : [ "span12"        , "span12 spanfirst" ]
    },
    "no_sidebar": {
      "default" : [ "span12" ]
    }
  }');

  // positions configuration
  $sidebar = 'position-5';

  // Detect layout
  if ($this->countModules("$sidebar")) {
    $layout = "one_sidebar";
  } else {
    $layout = "no_sidebar";
  }

  $layout = $layout_config->$layout;

  //
  $col = 0;
?>

<section id="ja-mainbody" class="container ja-mainbody">
  <div class="row">
    
    <!-- MAIN CONTENT -->
    <div id="ja-content" class="ja-content <?php echo $this->getClass($layout, $col) ?>" <?php echo $this->getData ($layout, $col++) ?>>
      
      <?php $this->loadBlock ('slideshow') ?>

      <?php $this->loadBlock ('spotlight-1') ?>

      <div id="ja-maincontent" class="clearfix">
        <jdoc:include type="message" />
        <jdoc:include type="component" />
      </div>

      <?php $this->loadBlock ('spotlight-2') ?>
    </div>
    <!-- //MAIN CONTENT -->
    
    <?php if ($this->countModules($sidebar)) : ?>
    <div class="ja-sidebar <?php echo $this->getClass($layout, $col) ?><?php $this->_c($sidebar)?>" <?php echo $this->getData ($layout, $col++) ?>>
      <!-- SIDEBAR -->
      <jdoc:include type="modules" name="<?php $this->_p($sidebar) ?>" style="T3xhtml" />
      <!-- //SIDEBAR -->
    </div>
    <?php endif ?>
  </div>
</section> 