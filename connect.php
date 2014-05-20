<?php

$con= mysqli_connect('localhost','root') or die("cannot connect");

mysqli_select_db($con,'user_db') or die("cannot select!");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: ".mysqli_connect_error(); 
}

?>