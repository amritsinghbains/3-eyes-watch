<?php
// Connection's Parameters
$db_host="localhost";
$db_name="124254";
$username="124254";
$password="qawsed1";
$db_con=mysql_connect($db_host,$username,$password);
if (!$db_con) {
    die ('Can\'t use fooooo : ' . mysql_error());
}
// Connection
mysql_connect($db_host,$username,$password);
$db_selected = mysql_select_db($db_name);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>