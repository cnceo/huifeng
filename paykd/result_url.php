<?
include_once("config.php");
$OrderId=$_REQUEST["P_OrderId"];//商户订单号
$CardId=$_REQUEST["P_CardId"];//卡号
$CardPass=$_REQUEST["P_CardPass"];//卡密
$FaceValue=$_REQUEST["P_FaceValue"];//金额
$ChannelId=$_REQUEST["P_ChannelId"];//充值类型

$subject=$_REQUEST["P_Subject"];//产品名称
$description=$_REQUEST["P_Description"];//银行id 
$price=$_REQUEST["P_Price"];//产品价格
$quantity=$_REQUEST["P_Quantity"];//产品数量
$notic=$_REQUEST["P_Notic"];//附加信息
$ErrCode=$_REQUEST["P_ErrCode"];//错误代码
$PostKey=$_REQUEST["P_PostKey"];//签名认证串
$payMoney=$_REQUEST["P_PayMoney"];//实际充值金额
$ErrMsg=$_REQUEST["P_ErrMsg"];//错误描述

$preEncodeStr=$UserId."|".$OrderId."|".$CardId."|".$CardPass."|".$FaceValue."|".$ChannelId."|".$SalfStr;

$encodeStr=md5($preEncodeStr);

echo "errCode=0";
if($PostKey==$encodeStr)
{
	if($ErrCode=="0") //支付成功
	{
		//设置为成功订单,主意订单的重复处理
		echo 'ErrCode=0';
				$Amount=$payMoney;//金额
				$BillNo=$notic;//订单号
				$hostname="localhost"; 
				$dbuser="root"; 
				$dbpasswd="root"; //数据库密码
				$dbname="hesheng"; 
				$conn = mysql_connect($hostname,$dbuser,$dbpasswd); //连接数据库
				mysql_query("SET NAMES 'UTF8'");
                		mysql_query("SET CHARACTER SET UTF8");
                		mysql_query("SET CHARACTER_SET_RESULTS=UTF8'"); 
				if (!$conn){die('Could not connect: ' . mysql_error());}//连接数据库
				//mysql_query("SET NAMES 'utf8'",$conn);
				mysql_select_db($dbname,$conn)or die("Unable to select database!"); 
				//查询当前订单名字
				$s_name_sql = "select username,id from ssc_member_recharge where rechargeId=$BillNo";  
				$s_name = mysql_query($s_name_sql) or die("Couldn't execute query!");
				while($row=mysql_fetch_array($s_name))
				{
				   $username=$row['username'];  //充值当前订单号是否存在
				   $id=$row['id']; //订单的ID
				}
				
				//查询当前订单是否存在
				$s_rId_sql = "select COUNT(extfield1) as crec from ssc_coin_log where extfield1=$BillNo";  
				$s_rId = mysql_query($s_rId_sql) or die("Couldn't execute query!");
				while($row=mysql_fetch_array($s_rId))
				{
				   $extfield1=$row['crec'];  //充值当前订单号是否存在
				}
				
				if($extfield1==0)
				{ //如果查询出来的订单系统不存在则添加、更新数据
				   if($czzs !='0'){
				     $rechrageAmount=number_format($Amount*(1+$czzs/100.00),2,'.',''); //充值赠送后的金额
				   }else{
					 $rechrageAmount=$Amount; //无活动
				   }
				   $s_info_sql = "select uid,coin from ssc_members where username='$username'";  
				   //根据名字username查询当前uid,当前金额
				   $s_info = mysql_query($s_info_sql) or die("Couldn't execute query!");
				   while($row=mysql_fetch_array($s_info)){
				     $uid=$row['uid'];  //充值帐号uid,当前金额
				     $bfAmount=$row['coin'];
				   }
				   $i_c_l = "insert into ssc_coin_log (uid,type,playedId,coin,userCoin,fcoin,liqType,actionUID,actionTime,actionIP,info,extfield0,extfield1) values ('$uid',0,0,'$rechrageAmount','$bfAmount'+'$rechrageAmount',0,1,0,UNIX_TIMESTAMP(),'0','aypay','$id','$BillNo')";
				   $i_c_l_result=mysql_query($i_c_l);  //插入用户余额更新记录
				   $u_m_r="update ssc_member_recharge set rechargeTime=UNIX_TIMESTAMP(),rechargeAmount='$rechrageAmount',coin='$bfAmount',state='2',info='aypay' where rechargeid='$BillNo'";
				   $u_m_r_result=mysql_query($u_m_r);  //更新用户帐变记录 
				   $u_o = "update ssc_members set coin = coin+'$rechrageAmount' where uid =$uid";
				   $u_o_result=mysql_query($u_o);  //更新用户表余额
				
				}
				mysql_close($conn); //关闭数据库
	}
	else
	{
		//支付失败
		echo "-err";
	}
}
else
{
	echo "-数据被传改";
}
?>