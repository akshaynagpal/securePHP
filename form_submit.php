<?php
session_start();
require 'connect.php';
include_once 'securimage/securimage.php';

$phone=0;
$photoAccept=0;
$securimage = new Securimage();
move_uploaded_file($_FILES["uploadPhoto"]["name"], "" . $_FILES["uploadPhoto"]["tmp_name"]);

$photoDetails = getimagesize($_FILES["uploadPhoto"]["tmp_name"]);
$photoWidth= $photoDetails[0];
$photoHeight= $photoDetails[1];
$allowedExts = array("gif", "jpeg", "jpg", "png");
//$allowedExts = array("gif","png");
$temp = explode(".", $_FILES["uploadPhoto"]["name"]);
$extension = end($temp);

if ((($_FILES["uploadPhoto"]["type"]=="image/gif")||($_FILES["uploadPhoto"]["type"] == "image/jpeg")||($_FILES["uploadPhoto"]["type"]=="image/jpg")||($_FILES["uploadPhoto"]["type"]=="image/png"))&& in_array($extension, $allowedExts))
{
	 	if($_FILES['uploadPhoto']['size'] <= 1048576) 
  		{
  	    	if($photoWidth<=300 && $photoHeight<=300)
			{
				$photoAccept=1 ;
				move_uploaded_file($_FILES["uploadPhoto"]["tmp_name"], "uploads/" . $_FILES["uploadPhoto"]["name"]);
				$photoPath = "uploads/" . $_FILES["uploadPhoto"]["name"];
			}
			else  echo "Photo not less than 300 X 300! Please upload file <=300 X 300 only!";
  		}
		else echo "File greater than 1MB! Please upload file <= 1 MB only!"	;
		
  
}
else echo "Image Format not accepted! Please try again!";
  
if($photoAccept==1)
{
if ($securimage->check($_POST['captcha_code']) == true)  // checking captcha code and image attributes
{

// function to prevent user from running sql code into form.

function make_safe($variable) { 
    $variable = mysql_real_escape_string(trim($variable));
    return $variable;
}
;
$name = make_safe($_POST['name']);
$email = make_safe($_POST['email']);
$phone = make_safe($_POST['phone']);
$date = make_safe($_POST['dob']);
$photoPath=make_safe($photoPath);

//echo $phone;

$q1 = "CALL InsertValues('$name','$email','$phone','$date','$photoPath','abc')";
$res = mysqli_query($con,$q1) or die(mysqli_error($con));

if($res)
{
echo "success! values inserted!" ;
echo "Click <a href=\"display.php?name=$name&phone=$phone&email=$email&photopath=$photoPath&dob=$date\"> here </a> to display your profile!" ;
}
else
echo "Error ";
}
else   //captcha mismatch
{
echo "The security code entered was incorrect.<br /><br />";
echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
exit;
}
}
else echo "Please upload image again!";

?>