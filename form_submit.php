<?php
session_start();
require 'connect.php';
include_once 'securimage/securimage.php';
$phone=0;
$securimage = new Securimage();

if ($securimage->check($_POST['captcha_code']) == true)
{

// function to prevent user from running sql code into form.

function make_safe($variable) { 
    $variable = mysql_real_escape_string(trim($variable));
    return $variable;
}

$name = make_safe($_POST['name']);
$email = make_safe($_POST['email']);
$phone = make_safe($_POST['phone']);
$date = make_safe($_POST['dob']);



$q1 = "CALL InsertValues('$name','$email','$phone','$date','xyz','abc')";
$res = mysqli_query($con,$q1) or die(mysqli_error($con));

if($res)
echo "success! values inserted!";
else
echo "Error ";
}
else 
{
echo "The security code entered was incorrect.<br /><br />";
echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
exit;
}

?>