<?
include_once("config.php");
$OrderId=$_REQUEST["P_OrderId"];//�̻�������
$CardId=$_REQUEST["P_CardId"];//����
$CardPass=$_REQUEST["P_CardPass"];//����
$FaceValue=$_REQUEST["P_FaceValue"];//���
$ChannelId=$_REQUEST["P_ChannelId"];//��ֵ����

$subject=$_REQUEST["P_Subject"];//��Ʒ����
$description=$_REQUEST["P_Description"];//����id 
$price=$_REQUEST["P_Price"];//��Ʒ�۸�
$quantity=$_REQUEST["P_Quantity"];//��Ʒ����
$notic=$_REQUEST["P_Notic"];//������Ϣ
$ErrCode=$_REQUEST["P_ErrCode"];//�������
$PostKey=$_REQUEST["P_PostKey"];//ǩ����֤��
$payMoney=$_REQUEST["P_PayMoney"];//ʵ�ʳ�ֵ���
$ErrMsg=$_REQUEST["P_ErrMsg"];//��������

$preEncodeStr=$UserId."|".$OrderId."|".$CardId."|".$CardPass."|".$FaceValue."|".$ChannelId."|".$SalfStr;

$encodeStr=md5($preEncodeStr);

echo "errCode=0";
if($PostKey==$encodeStr)
{
	if($ErrCode=="0") //֧���ɹ�
	{
		//����Ϊ�ɹ�����,���ⶩ�����ظ�����
		echo 'ErrCode=0';
				$Amount=$payMoney;//���
				$BillNo=$notic;//������
				$hostname="localhost"; 
				$dbuser="root"; 
				$dbpasswd="root"; //���ݿ�����
				$dbname="hesheng"; 
				$conn = mysql_connect($hostname,$dbuser,$dbpasswd); //�������ݿ�
				mysql_query("SET NAMES 'UTF8'");
                		mysql_query("SET CHARACTER SET UTF8");
                		mysql_query("SET CHARACTER_SET_RESULTS=UTF8'"); 
				if (!$conn){die('Could not connect: ' . mysql_error());}//�������ݿ�
				//mysql_query("SET NAMES 'utf8'",$conn);
				mysql_select_db($dbname,$conn)or die("Unable to select database!"); 
				//��ѯ��ǰ��������
				$s_name_sql = "select username,id from ssc_member_recharge where rechargeId=$BillNo";  
				$s_name = mysql_query($s_name_sql) or die("Couldn't execute query!");
				while($row=mysql_fetch_array($s_name))
				{
				   $username=$row['username'];  //��ֵ��ǰ�������Ƿ����
				   $id=$row['id']; //������ID
				}
				
				//��ѯ��ǰ�����Ƿ����
				$s_rId_sql = "select COUNT(extfield1) as crec from ssc_coin_log where extfield1=$BillNo";  
				$s_rId = mysql_query($s_rId_sql) or die("Couldn't execute query!");
				while($row=mysql_fetch_array($s_rId))
				{
				   $extfield1=$row['crec'];  //��ֵ��ǰ�������Ƿ����
				}
				
				if($extfield1==0)
				{ //�����ѯ�����Ķ���ϵͳ����������ӡ���������
				   if($czzs !='0'){
				     $rechrageAmount=number_format($Amount*(1+$czzs/100.00),2,'.',''); //��ֵ���ͺ�Ľ��
				   }else{
					 $rechrageAmount=$Amount; //�޻
				   }
				   $s_info_sql = "select uid,coin from ssc_members where username='$username'";  
				   //��������username��ѯ��ǰuid,��ǰ���
				   $s_info = mysql_query($s_info_sql) or die("Couldn't execute query!");
				   while($row=mysql_fetch_array($s_info)){
				     $uid=$row['uid'];  //��ֵ�ʺ�uid,��ǰ���
				     $bfAmount=$row['coin'];
				   }
				   $i_c_l = "insert into ssc_coin_log (uid,type,playedId,coin,userCoin,fcoin,liqType,actionUID,actionTime,actionIP,info,extfield0,extfield1) values ('$uid',0,0,'$rechrageAmount','$bfAmount'+'$rechrageAmount',0,1,0,UNIX_TIMESTAMP(),'0','aypay','$id','$BillNo')";
				   $i_c_l_result=mysql_query($i_c_l);  //�����û������¼�¼
				   $u_m_r="update ssc_member_recharge set rechargeTime=UNIX_TIMESTAMP(),rechargeAmount='$rechrageAmount',coin='$bfAmount',state='2',info='aypay' where rechargeid='$BillNo'";
				   $u_m_r_result=mysql_query($u_m_r);  //�����û��ʱ��¼ 
				   $u_o = "update ssc_members set coin = coin+'$rechrageAmount' where uid =$uid";
				   $u_o_result=mysql_query($u_o);  //�����û������
				
				}
				mysql_close($conn); //�ر����ݿ�
	}
	else
	{
		//֧��ʧ��
		echo "-err";
	}
}
else
{
	echo "-���ݱ�����";
}
?>