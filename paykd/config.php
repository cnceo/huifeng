<?
header( "content-type:text/html; charset=gbk" );
//�ڴ�֧�� Kdpay.Com
date_default_timezone_set('PRC');

//�ӿ���Կ����Ҫ���������Լ�����Կ��Ҫ����̨���õ�һ��
//��¼APIƽ̨���̻�����-->���뷽ʽ-->API���룬����鿴�Լ�����Կ��ID
$UserId="1001929";//ƽ̨�̻�ID����Ҫ�������Լ����̻�ID

$SalfStr="cea5b374bf75448e8e1bf7e7bb623d68";//�̻���Կ


//���ص�ַ
$gateWary="http://Api.Duqee.Com/pay/Bank.aspx";


//��ֵ�����̨֪ͨ��ַ
$result_url="http://".$_SERVER["HTTP_HOST"]."/paykd/result_url.php";


//��ֵ����û�����վ�ϵ�ת���ַ
$notify_url="http://".$_SERVER["HTTP_HOST"]."/paykd/notify_Url.php";
?>