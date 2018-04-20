<? header("content-Type: text/html; charset=utf-8");?> 
 
<?php
 


require_once("dinpay_key.php");
/* *
 功能：智付页面跳转同步通知页面
 版本：3.0
 日期：2013-08-01
 说明：
 以下代码仅为了方便商户安装接口而提供的样例具体说明以文档为准，商户可以根据自己网站的需要，按照技术文档编写。

 * */
	//获取智付GET过来反馈信息
//商号号
	$merchant_code	= $_POST["merchant_code"];

	//通知类型
	$notify_type = $_POST["notify_type"];

	//通知校验ID
	$notify_id = $_POST["notify_id"];

	//接口版本
	$interface_version = $_POST["interface_version"];

	//签名方式
	$sign_type = $_POST["sign_type"];

	//签名
	$dinpaySign = $_POST["sign"];

	//商家订单号
	$order_no = $_POST["order_no"];

	//商家订单时间
	$order_time = $_POST["order_time"];

	//商家订单金额
	$order_amount = $_POST["order_amount"];

	//回传参数
	$extra_return_param = $_POST["extra_return_param"];

	//智付交易定单号
	$trade_no = $_POST["trade_no"];

	//智付交易时间
	$trade_time = $_POST["trade_time"];

	//交易状态 SUCCESS 成功  FAILED 失败
	$trade_status = $_POST["trade_status"];

	//银行交易流水号
	$bank_seq_no = $_POST["bank_seq_no"];


	/**
	 *签名顺序按照参数名a到z的顺序排序，若遇到相同首字母，则看第二个字母，以此类推，
	*同时将商家支付密钥key放在最后参与签名，组成规则如下：
	*参数名1=参数值1&参数名2=参数值2&……&参数名n=参数值n&key=key值
	**/


	//组织订单信息
	$signStr = "";
	if($bank_seq_no != "") {
		$signStr = $signStr."bank_seq_no=".$bank_seq_no."&";
	}
	if($extra_return_param != "") {
	    $signStr = $signStr."extra_return_param=".$extra_return_param."&";
	}
	$signStr = $signStr."interface_version=V3.0&";
	$signStr = $signStr."merchant_code=".$merchant_code."&";
	if($notify_id != "") {
	    $signStr = $signStr."notify_id=".$notify_id."&notify_type=offline_notify&";
	}

        $signStr = $signStr."order_amount=".$order_amount."&";
        $signStr = $signStr."order_no=".$order_no."&";
        $signStr = $signStr."order_time=".$order_time."&";
        $signStr = $signStr."trade_no=".$trade_no."&";
        $signStr = $signStr."trade_status=".$trade_status."&";

	if($trade_time != "") {
	     $signStr = $signStr."trade_time=".$trade_time."&";
	}
	//$key="";
	$signStr = $signStr."key=".$key;
	$signInfo = $signStr;
	//将组装好的信息MD5签名
	$sign = md5($signInfo);
	echo "sign=".$sign."<br>";

	//比较智付返回的签名串与商家这边组装的签名串是否一致
	if($dinpaySign==$sign) {
		//验签成功
		/**
		此处进行商户业务操作
		业务结束
		*/
		echo "SUCCESS";
		
		
 
			
	 $r6_Order=$order_no;
     $r3_Amt=$order_amount;

	  $actionTime=time();
      $result = mysql_query("select count(*) from ssc_member_recharge where rechargeId='{$r6_Order}'");
      $num = mysql_result($result,"0");
      if(!$num){echo "<tr align=center bgcolor=#FFFFFF><td colspan=16>暂无充值数据</td></tr>";}
	  else{
	 		$result2 = mysql_query("select * from ssc_member_recharge where rechargeId='{$r6_Order}'");
		    $row = mysql_fetch_array($result2);
			if($row['state']=='0')
		       {      


			        $s="update ssc_members set coin=coin+{$r3_Amt} where  uid={$row['uid']}";
					if (mysql_query($s)){echo "";}
					else{echo "Error creating database: " . mysql_error();}  
 


			        $ss="update ssc_member_recharge set state='1',rechargeAmount={$r3_Amt},actionTime={$actionTime} where  rechargeId='".$r6_Order."'";
					if (mysql_query($ss)){echo "";}
					else{echo "Error creating database: " . mysql_error();}    
	
	           }
			   
		    else
		       {	echo "";}
	       }
			


		
		
		
		
		
		
		exit;
	}else
        {
		echo"验签失败 业务结束";
	}

?>
