<?php
require 'connect.php';

$name = $_GET['name'];
$phone = $_GET['phone'];
$email=$_GET['email'];
$photopath=$_GET['photopath'];
$date=$_GET['dob'];

echo "NAME: ";
echo $name;
echo "<br/>";
echo "PHONE: ";
echo $phone;
echo "<br/>";
echo "EMAIL:";
echo $email;
echo "<br/>";
echo "DATE: ";
echo $date;
echo "<br/>";
echo "YOUR PICTURE";
echo "<img src=\"$photopath\" />";
?>