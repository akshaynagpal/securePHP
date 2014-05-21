<?php
mysql_connect('localhost','root','') or die("cannot connect");
mysql_select_db('iit') or die("cannot select!");
$pass="5678";
$sql="UPDATE table1 set password='$pass' WHERE id=1";
$res=mysql_query($sql);
if($res)
echo"password changed!";
else 
echo"error";



?>