<?php session_start(); ?>

<meta http-equiv="content-type" content="text/html; charset=utf-8"/>

<?php

include("mysql.inc.php");

$name=$_POST['BGname']

$sql="SELECT BG_number,BG_name FROM board game WHERE BG_name='$name'";
$result=mysqli_query($sql);
$row=@mysql_fetch_row($result);

if($name != null && $row[1] == $name){    
    echo '<tr><td> $row[0] </td><td> $row[1] </td></tr>';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=BG_list.html>';
}
else
{
    echo '查無資料';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=BG_list.html>';
}


//echo '<table border="1"><tr><th>編號</th><th>名稱</th></tr>';
//while($row=mysql_fetch_array($result)){
    //echo "<tr><td> $row[0] </td><td> $row[1] </td></tr>";
//}

//echo'</table>';

?>