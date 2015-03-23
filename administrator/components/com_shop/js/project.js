
function select_action(inp)
    {
        var ids = '';
        if(inp=='newprj')
        {    
           window.location='index.php?option=com_vazn&page='+inp+'&id=-1';
           return(1);
        }   
        var rowNums = [];
        $.each($("."+gArgs[gname]['cssClass']+"_checkSelect"),function(id,field){
                var tmp = field.id.split('-');
                if(tmp[1] == gname && field.checked)
                {
                        rowNums[rowNums.length] = tmp[2];
                        var realId = getRowId(tmp[2],gname);
                        ids += ((ids != '')?',':'')+realId;
                }
        });
        stand_alone_pages = ['user_manage','new_user'];
        if($.trim(ids)!='' || $.inArray(inp,stand_alone_pages)!==-1 )
            window.location='index.php?option=com_vazn&page='+inp+'&id='+ids.split(',')[0];
        else
            $("#project_messages").html('<div class="alert alert-warning" >\n\
\n\
 لطفا یک آیتم را انتخاب نمایید </div>');
        
    }
    function after_grid(a,b)
    {
            $(".ajaxgrid_bottomTable").remove();
            return(b);
    }
    function getRowId(rowNum,gname)
    {
            return(trim($("#"+gname+"-span-id-"+rowNum).html()));
    }