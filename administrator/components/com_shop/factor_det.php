<?php
    function loadKala($id)
    {
        $out = '----';
        $my = new mysql_class();
        $my->ex_sql("select name,tolid_konande from kala where id=$id",$q);
        if(isset($q[0]))
            $out = $q[0]['name'].'['.$q[0]['tolid_konande'].']';
        return($out);
    }
    $factor_id = (int)$_REQUEST['factor_id'];
    $my = new mysql_class();
    $jam_kol = 0;
    $my->ex_sql("select sum(tedad*ghimat_vahed) as jam from factor_det where factor_id = $factor_id",$q);
    if(isset($q[0]))
        $jam_kol = (int)$q[0]['jam'];
    $q = null;
    $factor_tarikh = '----';
    $my->ex_sql("select * from factor where id = $factor_id",$q);
    if(isset($q[0]))
        $factor_tarikh = jdate ("Y/m/d",strtotime($q[0]['tarikh']));
    $gname = "gname_factor";
    $input =array($gname=>array('table'=>'#__edman_factor_det','div'=>'div_factor_det'));
    $xgrid1 = new xgrid($input,"index.php?option=com_shop&");
    $xgrid1->whereClause[$gname] = ' factor_id = '.$factor_id;
    $xgrid1->column[$gname][0]['name']='';
    $xgrid1->column[$gname][1]['name']='کالا';
    $xgrid1->column[$gname][3]['name']='قیمت واحد';
    $xgrid1->column[$gname][3]['name']='تعداد';
    $xgrid1->column[$gname][1]['cfunction']='loadKala';
    $xgrid1->column[$gname][2]['cfunction']='monize';
    $xgrid1->column[$gname][4]['name']='';
    $xgrid1->column[$gname][5]['name']='';
    /*
    $xgrid1->column[$gname][1]['name']='سفارش دهنده';
    //$xgrid1->column[$gname][1]['search'] = 'text';
    $xgrid1->column[$gname][2]['name']='تاریخ';
    $xgrid1->column[$gname][3]=$xgrid1->column[$gname][0];
    $xgrid1->column[$gname][3]['name']='شماره فاکتور';

    $xgrid1->canEdit[$gname]=TRUE;
    //$xgrid1->canAdd[$gname1]=TRUE;
    $xgrid1->canDelete[$gname]=TRUE;
    */
    $out =$xgrid1->getOut($_REQUEST);
    if($xgrid1->done)
            die($out);
?>
<script>
    var ggname_project ="<?php echo $gname; ?>";
    jQuery(document).ready(function(){
        var args=<?php echo $xgrid1->arg; ?>;
        //args[ggname_project]['afterLoad']=after_grid;
        intialGrid(args);
    });
</script>
<div id="jam_factor">
جمع فاکتور  : <?php echo monize($jam_kol); ?> ریال
</div>
<div id="div_factor_det" ></div>