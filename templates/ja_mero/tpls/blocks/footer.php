<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- FOOTER -->
<footer id="ja-footer" class="wrap ja-footer">

  <!-- FOOT NAVIGATION -->
<?php if ($this->checkSpotlight('footnav', 'footer-1, footer-2, footer-3, footer-4') && $this->countModules('footer-5 or footer-6')) : ?>
<!-- SPOTLIGHT 2 -->
<section class="container ja-fn">
  <div class="row">
    <div class="span6">
      <?php $this->spotlight ('footnav', 'footer-1, footer-2, footer-3, footer-4', array('row-fluid'=>1)) ?>
    </div>
    <div class="span3<?php $this->_c('footer-5', array('tablet' => 'span6', 'xtablet' => 'span6 pull-right'))?>">
      <jdoc:include type="modules" name="<?php $this->_p('footer-5') ?>" style="T3xhtml" />
    </div>
    <div class="span3<?php $this->_c('footer-6', array('tablet' => 'span6', 'xtablet' => 'span6 pull-right'))?>">
      <jdoc:include type="modules" name="<?php $this->_p('footer-6') ?>" style="T3xhtml" />
    </div>
  </div>
</section>
<!-- EQUAL FOOTNAV COLS -->
<?php  $this->addScript (T3_URL.'/js/jquery.equalheight.js'); ?>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    jQuery('.ja-fn div[class*="span"]').slice(1).equalHeight();
  });
</script>
<!-- //EQUAL FOOTNAV COLS -->

<!-- //SPOTLIGHT 2 -->
<?php endif ?>
  <!-- //FOOT NAVIGATION -->

  <section class="ja-copyright">
    <div class="container">
      <div class="row">
        <div class="span8 copyright<?php $this->_c('footer')?>">
          <jdoc:include type="modules" name="<?php $this->_p('footer') ?>" />
        </div>
        <?php if($this->getParam('t3-rmvlogo', 1)): ?>
        <div class="span4 poweredby">
          <a class="t3-logo t3-logo-dark pull-right" target="_blank" title="Powered By T3 Framework" href="http://t3-framework.org" <?php echo method_exists('T3', 'isHome') && T3::isHome() ? '' : 'rel="nofollow"' ?>>Powered by<strong>T3 Framework</strong></a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

</footer>
<!-- //FOOTER -->