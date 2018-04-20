<style type="text/css">
.a6{background-position: -32px -260px;}
.a6color{color: #08a09d}
.icon_3{background:url(/img/index/icon.png) no-repeat;}
.user_left{float:left;width:149px;height:656px;background:url(/img/index/left_bg.png) repeat-x top;}
.user_column{margin-top:26px;font-family:"微软雅黑";}
.user_column h4{color:#333;font-weight:400;font-size:14px;line-height:24px;}
.user_column h4 i{display:inline-block;margin:0 12px 0 18px;margin-top:-2px;width:24px;height:24px;vertical-align:text-top;}
.homeicon{background-position:left -8px;}
.cardicon{background-position:left -36px;}
.usericon{background-position:left -61px;}
.fileicon{background-position:left -91px;}
.user_column a{margin-left:54px;line-height:28px;}
</style>
            <div class="user_left">
            <?php if($this->user['type']){ ?>
            <div class="user_column">
            <h4>

        </div>
        <?php } ?>
        <div class="user_column">
            <h4><i class="icon_3 cardicon"></i>我的账户</h4>
            <a href="?tnt=sif" >账户中心</a>
            <a href="?tnt=rct" >盈亏</a>
            <a href="?tnt=rcn" >帐变</a>
            <a href="?tnt=erg" >余额宝</a>
            <a href="?tnt=sgs" >积分兑换</a>
        </div>
        <div class="user_column">
            <h4>
             <i class="icon_3 usericon"></i>个人资料</h4>
            <a href="?tnt=lrm" >信箱</a>
            <a href="?tnt=sbk" >绑定卡号</a> 
           <a href="?tnt=spd" >密码修改</a>
        </div>
        <div class="user_column">
            <h4>
                <i class="icon_3 fileicon"></i>历史记录</h4>
            <a href="?tnt=rsh" >投注记录</a>
        </div>
            </div>
            <div style="float: right;width: 881px;padding: 0 10px;border: 1px solid #ebebeb;border-top: 0;border-bottom: 0;background: #fff;overflow: hidden;min-height: 757px;font-family: '微软雅黑';">