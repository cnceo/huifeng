 <?php
  //公司名称：迅付信息科技有限公司
  //系统:新系统接口模拟
  //功能:获取商户相关信息
  //创建者:姚健
  //日期：2015-01-29
 
 include 'Config.php';
 if(isset($_REQUEST['mercode']) && !empty($_REQUEST['mercode']))
 {
     $mercode=$_REQUEST['mercode'];
     $arrayMer=getMerInfo($mercode);
     $repJson=json_encode($arrayMer);
     file_put_contents(PATH_LOG_FILE,date('y-m-d h:i:s').'获取商户信息:'.$repJson."\r\n",FILE_APPEND);
     echo $repJson;
 }
?>
