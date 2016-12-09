
讲座预约
<?php 
session_start();
//date('Y-m-d H:i:s',time());
//$nowTime = DateTime.Now.ToString("yyyy-MM-dd H:m:s");
// $nowTime = date('Y-m-d H:i:s',time());

?>

	
<?php

$nowTime = "2016-11-19 08:40:04";
require_once 'openDB.php';
$sqlstr = "select * from yq_chair where chBookTime >  '$nowTime'  order by id desc";
$result = mysql_query($sqlstr) or die("数据库请求失败！");
while ($rows = mysql_fetch_array($result)) {

	echo "<div class='chair-wrapper'>".$rows['id']."    ".$rows['chName']."</br>"." <input class='book-btn' type='submit' value='预约此讲座' onclick='jcud()'>"."</div>";
}
?>

	