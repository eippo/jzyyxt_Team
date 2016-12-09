
<?php 

include 'sys_conf.inc';

$connection = @mysql_connect($DBHOST, $DBUSER,$DBPWD) or die ("无法连接数据库！");
@mysql_query("set names utf8");
@mysql_select_db($DBNAME) or die("无法选择数据库！");
?>