<?php

   define('BASE_PATH',str_replace( '\\' , '/' , realpath(dirname(__FILE__).'/../'))."/log");
   define('PATH_LOG_FILE',BASE_PATH.'/newPayDemo-'.date('Y-m-j').'.log');

   $pmercode='179448';
  
   function getMerInfo($mercode)
   {
      $arrayMer=array();
      switch ($mercode)
     {
        case "179448":
           $arrayMer=array (
                             'mername'=>'179448',
                             'mercert'=>'DR7x6UvTR2hPYQRJEv0jrvdsjyTEgGvTcLynaZvJkORTpDlb068MmXhaSW1t73ubd4k98j7BeLVhGnmCLshpvjWqu0hN2g5EAJ7a713BLKKLPZoDuKJFfM7nDScnDdzq',
                             'acccode'=>'1794480010'
                           );
            break;
     }
     return $arrayMer;
   }
   $hostname="localhost"; 
	$dbuser="root"; 
	$conf['db']['password']='qwer#@!vcxzIE';
	$dbpasswd=$conf['db']['password']; 
	$dbname="fenghuang8888"; 
?>
