<div class="game-main">
<div id="bet-game">
	<div class="game-btn">
	<?php
		$this->getSystemSettings();
		$this->getTypes();
		$sql="select id, groupName, enable from {$this->prename}played_group where enable=1 and type=? order by sort";
		$groups=$this->getObject($sql, 'id', $this->type);
		if($this->groupId && !$groups[$this->groupId]) unset($this->groupId);
		
		if($groups) foreach($groups as $key=>$group){
			if(!$this->groupId) $this->groupId=$group['id'];
?>
		<div class="ul-li<?=($this->groupId==$group['id'])?' current':''?>">
        	<a class="cai" href="<?=$this->basePath('Index-group', $this->type .'/'.$group['id']) ?>"><span class="content"><?=$group['groupName']?></span></a>
		</div>
<?php } ?>
<div class="clear"></div>	
</div>
<div class="game-cont">
<?php $this->display('index/inc_game_played.php'); ?>
<div class="fandian-table" style="height:auto;" id="game-dom">
      <div class="fandian">
        <div class="fandian-k">
          <span class="spn8">奖金/返点：</span>
          <div class="fandian-box">
            <input type="button" value="" step="-0.1"/>
            <div id="slider" class="slider" value="<?=$this->ifs($_COOKIE['fanDian'], 0)?>" data-bet-count="<?=$this->settings['betMaxCount']?>" data-bet-zj-amount="<?=$this->settings['betMaxZjAmount']?>" max="<?=$this->user['fanDian']?>" game-fan-dian="<?=$this->settings['fanDianMax']?>" fan-dian="<?=$this->user['fanDian']?>" game-fan-dian-bdw="<?=$this->settings['fanDianBdwMax']?>" fan-dian-bdw="<?=$this->user['fanDianBdw']?>" min="0" step="0.1" slideCallBack="gameSetFanDian"></div>
            <input type="button" value="" step="0.1"/>
          </div>
          <span id="fandian-value" class="fdmoney"><?=$maxPl?>/0%</span>
        </div>
        <div style="float:right;width:313px;margin-top:-32px">
        <div class="beishu">
                <span>倍数：</span>
                <input type="button" class="surbeishu" value=""/>
                <input id="beishu" value="<?=$this->ifs($_COOKIE['beishu'],1)?>" class="txt"/>
                <input type="button" class="addbeishu" value=""/>
        </div>
        <div class="danwei">
          <span>模式：</span>
          <?php 
            $xlx = true;
            if($this->settings['modeY']==1){
          ?>
          <label><input type="radio" value="2.00" data-max-fan-dian="<?=$this->settings['betModeMaxFanDian0']?>" name="danwei" <?=$this->iff($xlx,'checked')?> />元</label>
          <?php 
              $xlx = false;
            }
            if($this->settings['modeJ']==1){
          ?>
          <label><input type="radio" value="0.20" data-max-fan-dian="<?=$this->settings['betModeMaxFanDian1']?>" name="danwei" <?=$this->iff($xlx,'checked')?> />角</label>
          <?php 
              $xlx = false;
            }
            if($this->settings['modeF']==1){
          ?>
          <label><input type="radio" value="0.02" data-max-fan-dian="<?=$this->settings['betModeMaxFanDian2']?>" name="danwei" <?=$this->iff($xlx,'checked')?> />分</label>
          <?php 
              $xlx = false;
            }
            if($this->settings['modeL']==1){
          ?>
          <label><input type="radio" value="0.002" data-max-fan-dian="<?=$this->settings['betModeMaxFanDian2']?>" name="danwei" <?=$this->iff($xlx,'checked')?> />厘</label>
          <?php } ?>
        </div>
        </div>
                <div class="clear"></div>
      </div>    
    </div>
   </div>
      <div class="clear"></div>
       <div id="game-helptips"><?php $this->display("index/inc_game_tips.php", 0 ,$this->played); ?> 
       </div>
       <span class="zhushu_a"><span class="zhushu_b"></span>
 <span class="prompt" id="game-tip-dom" style="float:left;">注数：0 注<br/>金额：0 元</span>
 <div class="xuanhaole" onclick="gameActionAddCode()"><i class="icon doublearrow"></i>选好了</div>
 <div class="qingchuhaoma" id="lt_cf_clear" onclick="gameActionRemoveCode()" title="清除投注框内投注单">清除</div>
 </span>
       <div class="tbn_bb_ln">
         <div class="tz_tab_list_box touzhu-cont" >
		 <table width="100%"></table>
         </div>
       </div>
     </div>
     <div class="clear"></div>
   </div>
   <div class="tbn_bb_2" style="display:none">
    <span class="tbn_clear" id="lt_random_one" onclick="gameActionRandom(1)" title="点击多次，随机更多">随机一注</span>
    <span class="tbn_clear" id="lt_random_five" onclick="genMultiRandom(5)" title="点击多次，随机更多">随机五注</span> 
    <span class="tbn_clear" id="lt_cf_clear" onclick="gameActionRemoveCode()" title="清除投注框内投注单">清除号码</span>
   </div>
   <div class="clear"></div>
   <div class="tbn_bb_r">
    <div class="touzhu-bottom sub_txt">
	<div class="tz-tongji">
        总注数: <strong><span class="r" id="all-count" style="color: #08a09d">0</span></strong> 注，
        总金额: <strong><span class="r" id="all-amount">0.00</span></strong> 元
   </div>
    <div>
     <label class=" zh_title tz-buytype touzhu-bottom " name="lt_trace_if">
	  <span class="tbn_clear" id="lt_cf_clear" style="margin-top:5px; height:30px; line-height:30px" title="清除投注框内投注单"><input name="zhuiHao" id="lt_trace_if" style="display:none" value="yes" type="checkbox">我要追号</span>
	  </label>

   </div>
  </div>
 </div>
  <div class="queren" class="tz-true-btn" id="btnPostBet"><i class="icon diceicon"></i>确认投注</div>

<div class="clear"></div>
<div class="zh_body">
   <div class="unit">
     <div class="unit_title">
       <div class="ut_l"></div>
       <div class="ut_r"></div>
     </div>
	    <div id="gamezhuihao" style="display:none">
          <?php $this->display('index/inc_game_zhuihao.php') ?>
		</div>
     <!--追号区结束-->
     <div class="bg10">

     </div>
  </div><!--unit end -->
  <div class="clear"></div>
  <!--游戏记录开始-->


   <!--游戏记录结束-->
   

</div>
</div>
