<script src="/skin/layer/layer.js"></script>
<?php $this->freshSession(); 
		//更新级别
		$ngrade=$this->getValue("select max(level) from {$this->prename}member_level where minScore <= {$this->user['scoreTotal']}");
		if($ngrade>$this->user['grade']){
			$sql="update ssc_members set grade={$ngrade} where uid=?";
			$this->update($sql, $this->user['uid']);
		}else{$ngrade=$this->user['grade'];}
		
		$date=strtotime('00:00:00');
		//查询5天内的数据
		$djcoin=$this->getValue("select sum(amount) from {$this->prename}bets where lotteryNo='' and isDelete!=1 and actionTime>UNIX_TIMESTAMP(DATE_SUB(now(),INTERVAL 5 DAY)) and uid=?",$this->user['uid']); 
?>
<script type="text/javascript">
function indexSign(err, data){
	if(err){
		davidError(err);
	}else{
		reloadMemberInfo();
		davidOk(data);
	}
} 
</script>
<style type="text/css">
body{
-moz-user-select: none;
-webkit-user-select: none;
-ms-user-select: none;
}
</style>
<!--用户信息栏-->
<ul class="userInfo">
          <li style="position: absolute;width: 18px;height: 21px;margin-left: 0;margin-top: 5px"><img src="/img/index/user.png"></li>
          <li class="user_name" ><a href="?tnt=sif" id="nickname"><?=$this->user['nickname']?></a></li>
          <li class="text" style="margin-left: 0;">欢迎您</li>
<span class="right">
          <li class="mn">
          <a href="javascript:void(0)">余额<i class="icon arrowicon"></i></a>
          <span id="usermoney"><?=$this->user['coin']?></span>
          <a style=" cursor: pointer;" href="javascript:void(0)" onClick="reloadMemberInfo();" class="icon user_new"></a></li>
          <span class="nr">
		  <li class="txt">冻结</li>
		  <li><span id="usermoney"><?=$this->ifs($djcoin, '0.00')?></span></li>
		  </span>
		  <span class="nr">
          <li class="txt">积分</li>
          <li><span id="usermoney"><?=$this->user['score']?></span></li>
          </span>
          <li class="right_a"><a href="<?=$this->basePath('Display-sign') ?>"  dataType="json" call="indexSign" target="ajax" >签到</a></li>
          <li class="right_a"><a href="?tnt=cr">充值</a></li>
          <li class="right_a"><a href="?tnt=ctc">提现</a></li>
          <li class="right_a"><a href="javascript:void(0)" onClick="out()" target="_top">退出</a></li>
</span>
</ul>
<!--用户信息栏end-->
</head>
<body>
<!--防止新的div叠层-->
<div class="usertop"></div>
<!--end-->