


 
 <?php
	$lastNo=$this->getGameLastNo($this->type);
	$kjHao=$this->getValue("select data from {$this->prename}data where type={$this->type} and number='{$lastNo['actionNo']}'");
	if($kjHao) $kjHao=explode(',', $kjHao);
	
	$actionNo=$this->getGameNo($this->type);
	$types=$this->getTypes();
	$kjdTime=$types[$this->type]['data_ftime'];
	$diffTime=strtotime($actionNo['actionTime'])-$this->time-$kjdTime;
	$kjDiffTime=strtotime($lastNo['actionTime'])-$this->time;
?>
<div id="kaijiang" type="<?=$this->type?>" ctype="<?=$types[$this->type]['type']?>">
                    <div class="game_top">
                        <div class="gm_con">
                            <div class="gm_con_to">
                                <div class="gct_l">
                                  <span class="kj-title" style="float: left;color: #999">
                                  <em>正在销售第</em>
                                  <span class="color-q"><?=$actionNo['actionNo']?></span>
                                  <em>期</em>
                                  </span><img id="voice"  class="voice-on"  title="声音开启，点击关闭" onclick="voiceKJ()" style="<!-- display:none --> position:fixed;right:-398px;">
                                    <div class="gct_time" style="float: left;width: 170px;margin-left: 16px;">
                                    <span style="float: left;">截止时间</span>
                                        <div class="gct_time_now">
                                            <div class="gct_time_now_l" action="<?=$this->basePath('Display-freshKanJiang', $this->type) ?>" id="count_down">00:00:00</div>
                                        </div>
                                    </div>
                                    <div class="gct_now" style="display: none;">
										
										<?php
										  $x115 = array(6,7,15,16);
										  $ssc = array(1,3,5,12,14,26);
										  if(in_array($this->type, $x115)){
										     $ttt = 'crx'; 
										  }else if(in_array($this->type, $ssc)){
										     $ttt='crt';
										  }else{
										     $ttt=' ';
										  }
										?>
                                    </div>
                                </div>
                                <div id="shownb-box">
                                     <div class="transition" id="tabs_container">
                                        <div class="make_transist hideleft showleft kj-bottom" id="nb-box">
                                     <div style="padding: 10px 12px;overflow: hidden;">
                                        <div class="game-icon2 game_<?=$types[$this->type]['id']?>"></div>
                                        <span class="wftxt"><?=$types[$this->type]['title']?></span>
                                            <span id="lt_opentimebox" style="float: left;color: #999;margin-left: 13px;">
                                            <span id="kjsay">
                                            <em class="kjtips">00:00</em>
                                            </span>
                                            </span>
                                        <br>
                                        <p class="nb-box06" style="margin-left: 12px">
                                        <em>第</em><span class="color-q last_issues" id="last_issues"><?=$lastNo['actionNo']?></span><em>期开奖号码</em>
                                        </p>
									 </div>
                                       <?php if($types[$this->type]['type']==1) { //时时彩?>
											<span class="wjkjData">
											  <p class="hide">
											  <span class="gr_s0000">等</span>
											  <span class="gr_s0000">待</span>
											  <span class="gr_s0000">开</span>
											  <span class="gr_s0000">将</span>
											  <span class="gr_s0000">中</span></p>
											  <ul class="kj-hao" ctype="g1"  cnum="5">
												  <li id="span_lot_0" class="gr_s0000"> <?=$kjHao[0]?> </li>
												  <li id="span_lot_1" class="gr_s0000"> <?=$kjHao[1]?> </li>
												  <li id="span_lot_2" class="gr_s0000"> <?=$kjHao[2]?> </li>
												  <li id="span_lot_3" class="gr_s0000"> <?=$kjHao[3]?> </li>
												  <li id="span_lot_4" class="gr_s0000"> <?=$kjHao[4]?> </li>
											   </ul>
											  <div class="clear"></div>
											  </span>
                                       <?php }else if($types[$this->type]['type']==5) { //平台自主彩种时时彩?>
											<span class="wjkjData">
											  <p class="hide">
											  <span class="gr_s0000">等</span>
											  <span class="gr_s0000">待</span>
											  <span class="gr_s0000">开</span>
											  <span class="gr_s0000">奖</span>
											  <span class="gr_s0000">中</span></p>
											  <ul class="kj-hao" ctype="g1"  cnum="5">
												  <li id="span_lot_0" class="gr_s0000"> <?=$kjHao[0]?> </li>
												  <li id="span_lot_1" class="gr_s0000"> <?=$kjHao[1]?> </li>
												  <li id="span_lot_2" class="gr_s0000"> <?=$kjHao[2]?> </li>
												  <li id="span_lot_3" class="gr_s0000"> <?=$kjHao[3]?> </li>
												  <li id="span_lot_4" class="gr_s0000"> <?=$kjHao[4]?> </li>
											   </ul>
											  <div class="clear"></div>
											  </span>	        
                                       <?php }else if($types[$this->type]['type']==2) { //11选5?>
											<span class="wjkjData">
											  <p class="hide">
											  <span class="gr_s0000">等</span>
											  <span class="gr_s0000">待</span>
											  <span class="gr_s0000">开</span>
											  <span class="gr_s0000">奖</span>
											  <span class="gr_s0000">中</span></p>
											  <ul class="kj-hao" ctype="g1"  cnum="5">
												  <li id="span_lot_0" class="gr_s0000"> <?=$kjHao[0]?> </li>
												  <li id="span_lot_1" class="gr_s0000"> <?=$kjHao[1]?> </li>
												  <li id="span_lot_2" class="gr_s0000"> <?=$kjHao[2]?> </li>
												  <li id="span_lot_3" class="gr_s0000"> <?=$kjHao[3]?> </li>
												  <li id="span_lot_4" class="gr_s0000"> <?=$kjHao[4]?> </li>
											   </ul>
											  <div class="clear"></div>
											  </span>	                                      
                                       <?php }else if($types[$this->type]['type']==3) { //3D 排列三?>
											<span class="wjkjData">
											  <p class="hide">
											  <span class="gr_s0000">开</span>
											  <span class="gr_s0000">奖</span>
											  <span class="gr_s0000">中</span></p>
											  <ul class="kj-hao" ctype="g1"  cnum="5">
												  <li id="span_lot_0" class="gr_s0000"> <?=$kjHao[0]?> </li>
												  <li id="span_lot_1" class="gr_s0000"> <?=$kjHao[1]?> </li>
												  <li id="span_lot_2" class="gr_s0000"> <?=$kjHao[2]?> </li>
											   </ul>
											  <div class="clear"></div>
											  </span>			
                                       <?php }else if($types[$this->type]['type']==9) { //快三?>
											<span class="wjkjData">
											  <p class="hide">
											  <span class="gr_s0000">开</span>
											  <span class="gr_s0000">奖</span>
											  <span class="gr_s0000">中</span></p>
											  <ul class="kj-hao" ctype="g1"  cnum="5">
												  <li id="span_lot_0" class="gr_s0000"> <?=$kjHao[0]?> </li>
												  <li id="span_lot_1" class="gr_s0000"> <?=$kjHao[1]?> </li>
												  <li id="span_lot_2" class="gr_s0000"> <?=$kjHao[2]?> </li>
											   </ul>
											  <div class="clear"></div>
											  </span>		
                                       <?php }else if($types[$this->type]['type']==4) { //快乐十分?>
											<span class="wjkjData">
											  <p class="hide">
											  <span class="gr_s0000">-</span>
											  <span class="gr_s0000">-</span>
											  <span class="gr_s0000">等</span>
											  <span class="gr_s0000">待</span>
											  <span class="gr_s0000">开</span>
											  <span class="gr_s0000">奖</span>
											  <span class="gr_s0000">-</span>
											  <span class="gr_s0000">-</span></p>
											  <ul class="kj-hao" ctype="g1"  cnum="8">
												  <li id="span_lot_0" class="gr_s0001"> <?=$kjHao[0]?> </li>
												  <li id="span_lot_1" class="gr_s0001"> <?=$kjHao[1]?> </li>
												  <li id="span_lot_2" class="gr_s0001"> <?=$kjHao[2]?> </li>
												  <li id="span_lot_3" class="gr_s0001"> <?=$kjHao[3]?> </li>
												  <li id="span_lot_4" class="gr_s0001"> <?=$kjHao[4]?> </li>
												  <li id="span_lot_5" class="gr_s0001"> <?=$kjHao[5]?> </li>
												  <li id="span_lot_6" class="gr_s0001"> <?=$kjHao[6]?> </li>
												  <li id="span_lot_7" class="gr_s0001"> <?=$kjHao[7]?> </li>
											   </ul>
											  <div class="clear"></div>
											  </span>
                                       <?php }else if($types[$this->type]['type']==6) { //PK10?>
											<span class="wjkjData">
											  <p class="hide">
											  <span class="gr_s0001">-</span>
											  <span class="gr_s0001">-</span>
											  <span class="gr_s0001">-</span>
											  <span class="gr_s0001">等</span>
											  <span class="gr_s0001">待</span>
											  <span class="gr_s0001">开</span>
											  <span class="gr_s0001">奖</span>
											  <span class="gr_s0001">-</span>
											  <span class="gr_s0001">-</span>
											  <span class="gr_s0001">-</span></p>
											  <ul class="kj-hao" ctype="g1"  cnum="10" style="padding-left: 6px">
												  <li id="span_lot_0" class="gr_s0001"> <?=$kjHao[0]?> </li>
												  <li id="span_lot_1" class="gr_s0001"> <?=$kjHao[1]?> </li>
												  <li id="span_lot_2" class="gr_s0001"> <?=$kjHao[2]?> </li>
												  <li id="span_lot_3" class="gr_s0001"> <?=$kjHao[3]?> </li>
												  <li id="span_lot_4" class="gr_s0001"> <?=$kjHao[4]?> </li>
												  <li id="span_lot_5" class="gr_s0001"> <?=$kjHao[5]?> </li>
												  <li id="span_lot_6" class="gr_s0001"> <?=$kjHao[6]?> </li>
												  <li id="span_lot_7" class="gr_s0001"> <?=$kjHao[7]?> </li>
												  <li id="span_lot_8" class="gr_s0001"> <?=$kjHao[8]?> </li>
												  <li id="span_lot_9" class="gr_s0001"> <?=$kjHao[9]?> </li>
											   </ul>
											  <div class="clear"></div>
											  </span>
                                       <?php } ?>
                                        </div>
									       <?php  $this->display('index/inc_data_history.php'); ?>
                                     </div>
                                </div>
<div  class="lskj">
                                <div class="tab_1">
                                <div class="qxzs_1">历史开奖</div>
								
<script type="text/javascript"> function zoushi(){davidInfo('该玩法号码走势正在开发中！')}</script>

									<?php if($ttt==' '){ ?>
										 <a  class="qxzs" href="javascript:void(0)" onClick="zoushi()"  target="_blank" >号码走势</a>
									<?php }else{ ?>
                                         <a  class="qxzs"href="/index.php?tnt=<?=$ttt ?>&type=<?=$this->type ?>&count=30" target="_blank" >号码走势</a>
									<?php }?>
									
									</div>
								</div>
						
                            <div class="kjlishi" id="newls">
							  <div align="center" id="demo" style="overflow:hidden;height:272px;width:330px; solid;line-height:22px;text-align:left;padding:10px">
                   <div class="homeboxleft">
                   <div id="demo1">
                      <?php?><?php
     $this->getSystemSettings();
     $this->getTypes();
	 $types=array(1,3,5,6,9,10,12,14,26,15,16,17,20,24,7,18);
	 $name=explode('|',$this->settings['paihangsjnr']);
	 $name2=explode('|',$this->settings['paihangsjje']);
     $gg=$this->getRows("select * from {$this->prename}bets where zjCount=1 and bonus>? order by id desc limit 10",$this->settings['sbje']);
	 $count=count($name); 
	 for($i=0;$i<$count;$i++) 
		
{ 
echo '<li>恭喜会员【***',substr($name[rand(0,count($name)-1)],-3),'】喜中&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<B>',$name2[rand(0,count($name2)-1)],'元</B></li>';
}

     if($gg) foreach($gg as $var){
		$gg=$this->getRows("select * from {$this->prename}bets where zjCount=1 and bonus>? order by id desc limit 10",$this->settings['sbje']);
		switch($var['type']){
			
			case 1:
		            echo '<li>恭喜会员【***',substr($var['username'],-3),'】喜中&nbsp<B>',$var['bonus'],'元</B></li>';
			break;
			case 3:
		            echo '<li>恭喜会员【***',substr($var['username'],-3),'】喜中&nbsp<b>',$var['bonus'],'元</b></li>';
			break;
			case 6:
		            echo '<li>恭喜会员【***',substr($var['username'],-3),'】喜中&nbsp<b>',$var['bonus'],'元</b></li>';
			break;
			case 9:
		            echo '<li>恭喜会员【***',substr($var['username'],-3),'】喜中&nbsp<b>',$var['bonus'],'元</b></li>';
			break;
			case 10:
		            echo '<li>恭喜会员【***',substr($var['username'],-3),'】喜中&nbsp<b>',$var['bonus'],'元</b></li>';
			break;
			case 12:
		            echo '<li>恭喜会员【***',substr($var['username'],-3),'】喜中&nbsp<b>',$var['bonus'],'元</b></li>';
			break;
			case 14:
		            echo '<li>恭喜会员【***',substr($var['username'],-3),'】喜中&nbsp<b>',$var['bonus'],'元</b></li>';
			break;
			case 26:
		            echo '<li>恭喜会员【***',substr($var['username'],-3),'】喜中&nbsp<b>',$var['bonus'],'元</b></li>';
			break;
			case 15:
		            echo '<li>恭喜会员【***',substr($var['username'],-3),'】喜中&nbsp<b>',$var['bonus'],'元</b></li>';
			break;
			case 16:
		            echo '<li>恭喜会员【***',substr($var['username'],-3),'】喜中&nbsp<b>',$var['bonus'],'元</b></li>';
			break;
			case 17:
		            echo '<li>恭喜会员【***',substr($var['username'],-3),'】喜中&nbsp<b>',$var['bonus'],'元</b></li>';
			break;
			case 20:
		            echo '<li>恭喜会员【***',substr($var['username'],-3),'】喜中&nbsp<b>',$var['bonus'],'元</b></li>';
			break;
			case 24:
		            echo '<li>恭喜会员【***',substr($var['username'],-3),'】喜中&nbsp<b>',$var['bonus'],'元</b></li>';
			break;
			case 7:
		            echo '<li>恭喜会员【***',substr($var['username'],-3),'】喜中&nbsp<b>',$var['bonus'],'元</b></li>';
			break;
			case 18:
		            echo '<li>恭喜会员【***',substr($var['username'],-3),'】喜中&nbsp<b>',$var['bonus'],'元</b></li>';

		}
	}
	?>
				  
                        </div>
                     </div>


  
    </div>
    <div id="demo2"></div>
</div>
<script language="javascript" type="text/javascript">
<!--
var demo = document.getElementById("demo");
var demo1 = document.getElementById("demo1");
var demo2 = document.getElementById("demo2");
var speed=30;    //滚动速度值，值越大速度越慢
var nnn=200/demo1.offsetHeight;
for(i=0;i<nnn;i++){demo1.innerHTML+="<br />"+ demo1.innerHTML}
demo2.innerHTML = demo1.innerHTML    //克隆demo2为demo1
function Marquee(){
    if(demo2.offsetTop-demo.scrollTop<=0)    //当滚动至demo1与demo2交界时
        demo.scrollTop-=demo1.offsetHeight    //demo跳到最顶端
    else{
        demo.scrollTop++     //如果是横向的 将 所有的 height top 改成 width left
    }
}
var MyMar = setInterval(Marquee,speed);        //设置定时器
demo.onmouseover = function(){clearInterval(MyMar)}    //鼠标经过时清除定时器达到滚动停止的目的
demo.onmouseout = function(){MyMar = setInterval(Marquee,speed)}    //鼠标移开时重设定时器
-->
</script>

<div class="clear"></div>
   <div class="jrtz">
   <div class="winning_title">今日投注</div>
   <div class="c_z">彩种</div><div class="c_z">金额(¥)</div><div class="c_z">奖金</div><div class="c_z">状态</div><div class="c_z">操作</div>
   </div>
  <div class="gm_con" id="yx_table">
     <div class="gm_con_to">
       <div class="yx_body">
         <div class="yx_box">
           <div class="yxlist" >
             <table border="0" cellpadding="0" cellspacing="0">
			 <tbody class="projectlist" id="order-history" style="background: #fff;color: #727272"><?php $this->display('index/inc_game_order_history.php'); ?></tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
                           </div>
                       </div>
</div></div>
<script type="text/javascript">
$(function(){
	window.S=<?=json_encode($diffTime>0)?>;
	window.KS=<?=json_encode($kjDiffTime>0)?>;
	window.kjTime=parseInt(<?=json_encode($kjdTime)?>);
	
	if($.browser.msie){
		setTimeout(function(){
			gameKanJiangDataC(<?=$diffTime?>);
		}, 1000);
	}else{
		setTimeout(gameKanJiangDataC, 1000, <?=$diffTime?>);
	}
	<?php if($kjDiffTime>0){ ?> 
		if($.browser.msie){
		setTimeout(function(){
			setKJWaiting(<?=$kjDiffTime?>);
		}, 1000);
		}else{
			setTimeout(setKJWaiting, 1000, <?=$kjDiffTime?>);
		}
	<?php } ?> 
	<?=$this->iff($this->settings['closeVoice'], 'setVoiceStatus(false);', 'setVoiceStatus(true);')?>
	<?php if(!$kjHao){ ?> 
		loadKjData();
	<?php } ?> 
});
</script>
