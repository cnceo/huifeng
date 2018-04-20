<?php 
$sql="select simpleInfo, info, example  from {$this->prename}played where id=?";
$playeds=$this->getRows($sql, $args[0]);
?>
<div class="showhelp" style="font-size:15px;">
<div class="jo_l"></div>
	<h5><?=$playeds[0]["simpleInfo"]?></h5>
   <span action="lt_example" class="wanfajieshao showeg"><span class="wanfaico1"></span>玩法介绍</span>
    <span action="lt_help" class="zhongjiang showeg">中奖举例</span>
    <div class="clear"></div>
</div>
<div class="game_eg hide" id="lt_examples_div">
	<div class="cont"><?=$playeds[0]["example"]?></div>
 </div>
 <div class="game_eg hide" id="lt_helps_div">
	<div class="cont">中奖举例：<br /><?=$playeds[0]["info"]?></div>
 </div>