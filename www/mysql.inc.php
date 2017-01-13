<meta http-equiv="content-type" conntent="text/html; charset=utf-8"/>

<?php

  $db_server="120.108.111.157/phpmyadmin";
 
 $db_name="10302112_final";
 
 $db_user="103021120";

 $db_passwd="2jt4sv";

 $con=mysqli_connect($db_server,$db_user,$db_passwd,$db_name);
 if(!$con)
	die("無法對資料庫連線");

 mysqli_query($con, "SET NAMES utf8");

?>