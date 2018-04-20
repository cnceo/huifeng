 <?php
   //调用开奖信息 
	$lastNo=$this->getGameLastNo($this->type);
	$kjHao_list=$this->getRows("select data,number from {$this->prename}data where type={$this->type} and number<='{$lastNo['actionNo']}' order by number desc limit 0,10");
	//print_r($kjHao_list);exit;
	$dxds=array();
	foreach($kjHao_list as $i=>$kjHao_arr){
		$kjHao=explode(',', $kjHao_arr['data']);
		//echo $i;

		if($kjHao_arr['number']==$lastNo['actionNo']) $kjHao1=$kjHao;
			if($i==0){
				foreach($kjHao as $key=>$val){
					if($val>=5) $dxds[$key][0]='大';
					else $dxds[$key][0]='小';
					if($val % 2==0) $dxds[$key][1]='双';
					else $dxds[$key][1]='单';
					$dxds[$key][2]=1;
					$dxds[$key][3]=1;
					//print_r($dxds);echo "<br>==<br>";
				}
			}else{	
				foreach($kjHao as $key=>$val){
					if($dxds[$key][0]=='大' && $val>=5){$dxds[$key][2]++;}
					if($dxds[$key][0]=='小' && $val<5){$dxds[$key][2]++;}
					if($dxds[$key][1]=='双' && $val % 2==0){$dxds[$key][3]++;}
					if($dxds[$key][1]=='单' && $val % 2!=0){$dxds[$key][3]++;}
				}
			}	
	}
	//print_r($dxds);
	$actionNo=$this->getGameNo($this->type);
	$types=$this->getTypes();
	$kjdTime=$types[$this->type]['data_ftime'];
	$diffTime=strtotime($actionNo['actionTime'])-$this->time-$kjdTime;
	$kjDiffTime=strtotime($lastNo['actionTime'])-$this->time;
?>
<div id="c_top_leftban" >
<div  id="kaijiang" type="<?=$this->type?>"ctype="<?=$types[$this->type]['type']?>">
    <table border="0">
        <tbody><tr>
            <td width="320px">
                <table border="0" style="height:102px;">
                    <tbody><tr>
                        <td style="border-bottom:#b2a892 1px solid;" align="right">
                            <font style="font-size:15px;margin-left:8px;"><b style="color:#c30000;"><?=$types[$this->type]['title']?></b></font>
                        </td>
                        <td align="right" style="border-bottom:#b2a892 1px solid;"><input type="button" value="音效开启" id="voice" class="voice-on" onclick="voiceKJ()">
                        <?php
										  $x115 = array(6,7,15,16);
										  $ssc = array(1,3,5,12,14,26);
										  $qt = array(9,10,18,20,25);
										  if(in_array($this->type, $x115)){
										     $ttt = 'crx'; 
										  }else if(in_array($this->type, $ssc)){
										     $ttt='crt';
										  }else if(in_array($this->type, $qt)){
										     $ttt='crt';
											 }else {
										     $ttt=' ';
										  }
										?>
										<?php if($ttt==' '){ ?>
										 <input type="button" value="遗漏分析" id="c_top_bntfx" onclick="zoushi()">
										<?php }else{ ?>
                                         <input type="button" value="遗漏分析" id="c_top_bntfx" onclick="window.open('/?tnt=<?=$ttt?>&type=<?=$this->type ?>&count=30')">
										<?php }?>
                           
                        </td>
                    </tr>
                    <tr>
                        <td style="border-bottom:#b2a892 1px solid;" colspan="2">
                            <div class="c_sale_num">
                                <font class="wjtips" style="margin-left:8px;color:#18ff00;"><b>正在销售：</b></font>  
                                第 
                                <span id="current_issue" style="color:#18ff00;font-size:14px;font-weight:bold;"><?=$actionNo['actionNo']?></span> 
                                 期 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-bottom:#b2a892 1px solid;" colspan="2">
                            <div class="c_sale_num">
                                <span id="current_endtime" style="display:none;"><?=$actionNo['actionTime']?></span>
                                投注剩余时间：
                                <span id="count_down" style="margin-left:8px;color:#ffea00;font-size:18px;font-weight:bold;" action="<?=$this->basePath('Display-freshKanJiang', $this->type) ?>">00:00:00</span> 
                            </div>
                        </td>
                    </tr>
                </tbody></table>
            </td>
            <td class="c_top_rightban">
                <div class="c_top_righttitle">
                    <?=$types[$this->type]['title']?> 第 <span style="color:#ffffff;font-size:13px;" id="last_issues"><?=$lastNo['actionNo']?></span> 期
                    <span id="lt_opentimebox" style="display: none;">
                        
                        <span id="waitopendesc" style="color: #ff9698;">等待开奖</span>
                        
                        <span id="lt_opentimeleft" style="color:#ff9698;"></span>
                    </span>
                    <span id="lt_opentimebox2" style="color: rgb(255, 150, 152);display: none;">
                        <strong>正在开奖</strong>
                    </span>
                </div>
                <div style="display: none;" class="c_top_righban" id="showadvbox">
                    <object id="forfun" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="330" height="70" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0">
						    <param name="movie" value="/template/images/xl/adv.swf" />
						    <param name="quality" value="high" />
						    <param name="bgcolor" value="#F0F0F0" />
						    <param name="menu" value="false" />
						    <param name="wmode" value="opaque" />
						    <param name="FlashVars" />
						    <param name="allowScriptAccess" value="sameDomain" />
						    <embed id="forfunex" src="/template/images/xl/adv.swf" width="330" height="70" align="middle" quality="high" bgcolor="#f0fff8" menu="false" play="true" loop="true" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer">
						    </embed>
						</object>
                </div>
                <?php if($types[$this->type]['type']==1 || $types[$this->type]['type']==5) { //时时彩?>
                <div class="gct_r_nub kj-hao" ctype="g0"  cnum="5">
                    <div id="span_lot_0" class="gr_s gr_s<?=intval($kjHao1[0])?>" flag="normal"></div>
                    <div id="span_lot_1" class="gr_s gr_s<?=intval($kjHao1[1])?>" flag="normal"></div>
                    <div id="span_lot_2" class="gr_s gr_s<?=intval($kjHao1[2])?>" flag="normal"></div>
                    <div id="span_lot_3" class="gr_s gr_s<?=intval($kjHao1[3])?>" flag="normal"></div>
                    <div id="span_lot_4" class="gr_s gr_s<?=intval($kjHao1[4])?>" flag="normal"></div>
                </div>
                <?php }elseif($types[$this->type]['type']==2) { //115?>
                <div class="gct_r_nub kj-hao" ctype="g3"  cnum="5">
                    <div id="span_lot_0" class="gr_s gr_s<?=$kjHao1[0]?>" flag="normal"></div>
                    <div id="span_lot_1" class="gr_s gr_s<?=$kjHao1[1]?>" flag="normal"></div>
                    <div id="span_lot_2" class="gr_s gr_s<?=$kjHao1[2]?>" flag="normal"></div>
                    <div id="span_lot_3" class="gr_s gr_s<?=$kjHao1[3]?>" flag="normal"></div>
                    <div id="span_lot_4" class="gr_s gr_s<?=$kjHao1[4]?>" flag="normal"></div>
                </div>
                <?php }elseif($types[$this->type]['type']==3 || $types[$this->type]['type']==9) { //3D?>
                <div class="gct_r_nub kj-hao" ctype="g3"  cnum="3">
                	<div  class="gr_s gr_sx"></div><div  class="gr_s gr_sx"></div>
                    <div id="span_lot_0" class="gr_s gr_s<?=intval($kjHao1[0])?>" flag="normal"></div>
                    <div id="span_lot_1" class="gr_s gr_s<?=intval($kjHao1[1])?>" flag="normal"></div>
                    <div id="span_lot_2" class="gr_s gr_s<?=intval($kjHao1[2])?>" flag="normal"></div>
                </div>
                <?php }elseif($types[$this->type]['type']==4) { //cqsf?>
                <div class="gct_r_nub gct_r_nub4 kj-hao" ctype="g4"  cnum="10">
                    <div id="span_lot_0" class="gr_s gr_s<?=$kjHao1[0]?>" flag="normal"></div>
                    <div id="span_lot_1" class="gr_s gr_s<?=$kjHao1[1]?>" flag="normal"></div>
                    <div id="span_lot_2" class="gr_s gr_s<?=$kjHao1[2]?>" flag="normal"></div>
                    <div id="span_lot_3" class="gr_s gr_s<?=$kjHao1[3]?>" flag="normal"></div>
                    <div id="span_lot_4" class="gr_s gr_s<?=$kjHao1[4]?>" flag="normal"></div>
                    <div id="span_lot_5" class="gr_s gr_s<?=$kjHao1[5]?>" flag="normal"></div>
                    <div id="span_lot_6" class="gr_s gr_s<?=$kjHao1[6]?>" flag="normal"></div>
                    <div id="span_lot_7" class="gr_s gr_s<?=$kjHao1[7]?>" flag="normal"></div>
                </div>
                <?php }elseif($types[$this->type]['type']==6) { //pk10?>
                <div class="gct_r_nub gct_r_nub6 kj-hao" ctype="g6"  cnum="10">
                    <div id="span_lot_0" class="gr_s gr_s<?=$kjHao1[0]?>" flag="normal"></div>
                    <div id="span_lot_1" class="gr_s gr_s<?=$kjHao1[1]?>" flag="normal"></div>
                    <div id="span_lot_2" class="gr_s gr_s<?=$kjHao1[2]?>" flag="normal"></div>
                    <div id="span_lot_3" class="gr_s gr_s<?=$kjHao1[3]?>" flag="normal"></div>
                    <div id="span_lot_4" class="gr_s gr_s<?=$kjHao1[4]?>" flag="normal"></div>
                    <div id="span_lot_5" class="gr_s gr_s_br gr_s<?=$kjHao1[5]?>" flag="normal"></div>
                    <div id="span_lot_6" class="gr_s gr_s<?=$kjHao1[6]?>" flag="normal"></div>
                    <div id="span_lot_7" class="gr_s gr_s<?=$kjHao1[7]?>" flag="normal"></div>
                    <div id="span_lot_8" class="gr_s gr_s<?=$kjHao1[8]?>" flag="normal"></div>
                    <div id="span_lot_9" class="gr_s gr_s<?=$kjHao1[9]?>" flag="normal"></div>
                </div>
                <? }?>
            </td>
            <td id="dxdszs">
             <?php if($types[$this->type]['type']==3 || $types[$this->type]['type']==9) { //3D?>
               <table width="100%" border="0" cellpadding="0" cellspacing="0" class="dxdszs_tab">
                <tr>
                	<th>期号</th>
                    <th>开奖号</th>
                    <th>百位</th>
                    <th>十位</th>
                    <th>个位</th>
                </tr>
                <?
      $sql="select id, type, time, number, data from {$this->prename}data where type={$this->type} order by number desc limit 4";
      if($data=$this->getRows($sql)) foreach($data as $var){
		  $hao_arr=explode(",",$var['data']);
          $dqhm=$dqhm2=$dxds="";
          $ww=array();
          $sxzt="组六";
          $sxhz=$exhz=0;
          $jj=1;
          foreach($hao_arr as $value){
              $dxds="";
              if($value-5>=0){$dxds.="大";}
              if($value-5<0){$dxds.="小";}
              if(($value+1)%2==0){$dxds.="单";}
              if(($value+2)%2==0){$dxds.="双";}
              $ww[$jj]=$dxds;

                  $sxhz+=$value;
                  if($jj==3){$dqhm=$value;}
                  elseif($jj==4){
                      if($dqhm==$value) $sxzt="组三";
                      else $dqhm1=$value;
                  }elseif($jj==5 && $sxzt!="组三"){			
                      if($dqhm==$value){$sxzt="组三";}
                      elseif($dqhm1==$value){$sxzt="组三";}
                  }elseif($jj==5 && $sxzt=="组三"){
					if($dqhm==$value){$sxzt="豹子";}
                  }

              $jj++;
          }
      ?>
      <tr>
          <td align="center"><?=$var['number']?></td>
          <td align="center" style="color:#9C1818"><?=$var['data']?></td>
          <td align="center"><?=$ww[1]?></td>
          <td align="center"><?=$ww[2]?></td>
          <td align="center"><?=$ww[3]?></td>
      </tr>
      <?php } ?>
            </table>
            <?php }elseif($types[$this->type]['type']==4) { //cqsf?>
               <table width="100%" border="0" cellpadding="0" cellspacing="0" class="dxdszs_tab">
                <tr>
                	<th>期号</th>
                    <th>开奖号</th>
                </tr>
                <?
      $sql="select id, type, time, number, data from {$this->prename}data where type={$this->type} order by number desc limit 4";
      if($data=$this->getRows($sql)) foreach($data as $var){
      ?>
      <tr>
          <td align="center"><?=$var['number']?></td>
          <td align="center" style="color:#9C1818"><?=$var['data']?></td>
      </tr>
      <?php } ?>
            </table>
            <?php }elseif($types[$this->type]['type']==6) { //3D?>
               <table width="100%" border="0" cellpadding="0" cellspacing="0" class="dxdszs_tab">
                <tr>
                	<th>期号</th>
                    <th>开奖号</th>
                </tr>
                <?
      $sql="select id, type, time, number, data from {$this->prename}data where type={$this->type} order by number desc limit 4";
      if($data=$this->getRows($sql)) foreach($data as $var){
      ?>
      <tr>
          <td align="center"><?=$var['number']?></td>
          <td align="center" style="color:#9C1818"><?=$var['data']?></td>
      </tr>
      <?php } ?>
            </table>
            <? }else{?>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="dxdszs_tab">
                <tr>
                	<th>期号</th>
                    <th>开奖号</th>
                    <th>万位</th>
                    <th>千位</th>
                    <th>百位</th>
                    <th>十位</th>
                    <th>个位</th>
                </tr>
                <?
      $sql="select id, type, time, number, data from {$this->prename}data where type={$this->type} order by number desc limit 4";
      if($data=$this->getRows($sql))
	  	foreach($data as $var){
          $hao_arr=explode(",",$var['data']);
		  $numbero_arr=explode("-",$var['number']);
          $dqhm=$dqhm2=$dxds="";
          $ww=array();
          $sxzt="组六";
          $sxhz=$exhz=0;
          $jj=1;
          foreach($hao_arr as $value){
              $dxds="";
              if($value-5>=0){$dxds.="大";}
              if($value-5<0){$dxds.="小";}
              if(($value+1)%2==0){$dxds.="单";}
              if(($value+2)%2==0){$dxds.="双";}
              $ww[$jj]=$dxds;
              $jj++;
          }
      ?>
      <tr>
          <td align="center"><?=$numbero_arr[1]?></td>
          <td align="center" style="color:#9C1818"><?=$var['data']?></td>
          <td align="center"><?=$ww[1]?></td>
          <td align="center"><?=$ww[2]?></td>
          <td align="center"><?=$ww[3]?></td>
          <td align="center"><?=$ww[4]?></td>
          <td align="center"><?=$ww[5]?></td>
      </tr>
      <?php } ?>
            </table>
            <? }?>
            </td>
        </tr>
    </tbody></table>
</div></div>
<script type="text/javascript">
var $showKjing=1;
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
	<?php if(!$kjHao1){ ?> 
		$showKjing=0;loadKjData();
	<?php } ?> 
	setInterval(function() {$("#dxdszs").load(location.href+" #dxdszs>*","");}, 5000);
});
</script>
<script type="text/javascript"> function zoushi(){davidInfo('该玩法号码走势正在开发中！')}</script>