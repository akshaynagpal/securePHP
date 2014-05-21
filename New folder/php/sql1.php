<?php
mysql_connect('localhost','root','') or die("cannot connect");
mysql_select_db('iit') or die("cannot select!");
$username='akshay';
$password='1234';
$name='akshay nagpal';

$sql="INSERT INTO table1 VALUES('','$name','$username','$password')";
$res= mysql_query($sql);
if($res)
echo "inserted";
else
echo"error!!";

?>