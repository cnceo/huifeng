<?php
include_once("../config.php");
$P_CardId=$_REQUEST["cardId"];
$P_CardPass=$_REQUEST["cardPass"];
$P_FaceValue=$_REQUEST["faceValue"];
$P_ChannelId=$_REQUEST["channelId"];
$P_Subject=$_REQUEST["subject"];
$P_Price=$_REQUEST["price"];
$P_Quantity=$_REQUEST["quantity"];
$P_Description=$_REQUEST["description"];
$P_Notic=$_REQUEST["notic"];
$P_Bankid=$_REQUEST["pd_FrpId"];//银行ID
$P_Result_url=$result_url;
$P_Notify_url=$notify_url;
if(empty($P_Price)){$P_Price=0;};
if(empty($P_Bankid)){$P_Bankid=0;};
$P_OrderId=getOrderId();
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
$params.="&P_Description=".$P_Bankid;
$params.="&P_Notic=".$P_Notic;
$params.="&P_Result_url=".$P_Result_url;
$params.="&P_Notify_url=".$P_Notify_url;
$params.="&P_PostKey=".$P_PostKey;

//在这里对订单进行入库保存
//下面这句是提交到API
//echo $params;
header("location:$gateWary?$params");
function getOrderId()
{
	return date("YmdHis")."".rand(1000000,9999999);
}
?>