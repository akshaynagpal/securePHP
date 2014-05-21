<?php
mysql_connect('localhost','root','') or die("cannot connect");
mysql_select_db('iit') or die("cannot select!");

$sql="SELECT name from table1 WHERE id=3";
$res= mysql_query($sql);
$name=mysql_result($res,0);
echo"$name";
?>