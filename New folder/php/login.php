<?php
$u2name=$_POST['uname'];
$p=$_POST['pass'];
mysql_connect('localhost','root','') or die("ERROR! cannot connect to the database!");
 mysql_select_db('friends') or die("ERROR! database not found");

 $cmd1="SELECT COUNT(username) FROM userbase WHERE username='$u2name' AND password='$p'";
 $cmd2=mysql_query($cmd1);
 $cmd3=mysql_result($cmd2,0);

if($cmd3==1)
{
session_start();
$_SESSION['xyz']=$u2name;

header("location:home.php");

}
else{echo "invalid login!please check!";}

?>