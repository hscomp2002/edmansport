<?php
/**
 * @version 1
 * @package    joomla
 * @subpackage Project
 * @author	   	
 *  @copyright  	Copyright (C) 2014, . All rights reserved.
 *  @license 
 */

//--No direct access
defined('_JEXEC') or die('Resrtricted Access');
define('COM_PATH','components/com_shop/');
include COM_PATH.'class/conf.php';
include COM_PATH.'class/mysql_class.php';
include COM_PATH.'class/xgrid.php';
include COM_PATH.'class/inc.php';
include COM_PATH.'class/jdf.php';
include COM_PATH.'class/audit_class.php';
JHtml::_('jquery.framework',false);
$document = JFactory::getDocument();
//$document->addScript(COM_PATH.'js/jquery.min.js');

$document->addScript(COM_PATH.'js/jq/jquery.jqplot.min.js');
$document->addScript(COM_PATH.'js/project.js');
$document->addScript(COM_PATH.'js/grid.js');
$document->addScript(COM_PATH.'js/cal/jalali.js');
$document->addScript(COM_PATH.'js/cal/calendar.js');
$document->addScript(COM_PATH.'js/cal/calendar-setup.js');
$document->addScript(COM_PATH.'js/cal/lang/calendar-fa.js');
//$document->addScript(COM_PATH.'js/jq/jqplot.canvasTextRenderer.min.js');
//$document->addScript(COM_PATH.'js/jq/jqplot.canvasAxisLabelRenderer.min.js');

$document->addStyleSheet(COM_PATH.'css/xgrid.css');
$document->addStyleSheet(COM_PATH.'css/com_project.css');
$document->addStyleSheet(COM_PATH.'js/cal/skins/aqua/theme.css');
$document->addStyleSheet(COM_PATH.'css/jquery.jqplot.min.css');

$tmp='ali';
$page = isset($_REQUEST['page'])?trim($_REQUEST['page']):'main';
if(isset($_REQUEST['function']))
{
    var_dump($_REQUEST);
}    
if($page =='main')
{    
        function loadDet($inp)
        {
            $out = '<a class="btn btn-info" href="index.php?option=com_vazn&page=detail&id='.$inp.'"> <i class="icon-white icon-pencil"></i> </a>';
            return $out;
        }
        function loadPic($inp)
        {
            $out = '<a class="btn btn-info" href="index.php?option=com_vazn&page=project_pics&id='.$inp.'" ><i class="icon-white icon-camera"></i> </a>';
            return $out;
        }
        function loadcost($inp)
        {
            $out = '<a class="btn btn-info" href="index.php?option=com_vazn&page=project_costs&id='.$inp.'" > <i class="icon-white icon-picture"></i> </a>';
            return $out;
        }
        function tarikh($inp)
        {
            return(jdate("Y/m/d",strtotime($inp)));
        }
        
        function nofunc($inp)
        {
            return 'برای ویرایش کلیک کنید';
        }
        function genPass($inp)
        {
            return(JUserHelper::hashPassword($inp)); 
        }
}
else 
{
        require $page.'.php';
}    
?>
<?php if($page =='main'){ ?>
<script>
    var ggname_project ="<?php echo $gname; ?>";
    jQuery(document).ready(function(){
        var args=<?php echo $xgrid1->arg; ?>;
        //args[ggname_project]['afterLoad']=after_grid;
        intialGrid(args);
    });
</script>
<div id="project_messages" style="text-align: center;" >
</div>    
    
    <div style="margin-bottom: 10px;text-align: left;" >
    <button class="btn btn-warning" onclick="select_action('kalas');" ><i class="icon-white icon-list"></i> 
کالا ها
    </button>
    <button class="btn btn-success" onclick="select_action('factors');" ><i class="icon-white icon-pencil"></i> 
فاکتور ها
    </button>
</div>
<div id="div_user" ></div>  
<?php } else{ ?>
    <a href="index.php?option=com_vazn&"  class="btn btn-warning" ><i class="icon-white icon-arrow-left"></i>
        بازگشت به صفحه اصلی
    </a>
<?php }

?>
