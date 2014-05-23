<?php
session_start();
require 'connect.php';
include 'pass_gen.php';
include_once 'securimage/securimage.php';

$phone=0;
$photoAccept=0;
$securimage = new Securimage();
$photoPath = "uploads/" . $_FILES["uploadPhoto"]['name'];
echo $photoPath;
echo $_FILES['uploadPhoto']['tmp_name'];


/* image code

move_uploaded_file($_FILES["uploadPhoto"]["name"], "" . $_FILES["uploadPhoto"]["tmp_name"]);

$allowedExts = array("gif", "jpeg", "jpg", "png");
//$allowedExts = array("gif","png");
$temp = explode(".", $_FILES["uploadPhoto"]["name"]);
$extension = end($temp);

if ((($_FILES["uploadPhoto"]["type"]=="image/gif")||($_FILES["uploadPhoto"]["type"] == "image/jpeg")||($_FILES["uploadPhoto"]["type"]=="image/jpg")||($_FILES["uploadPhoto"]["type"]=="image/png"))&& in_array($extension, $allowedExts))
{
   $photoDetails = getimagesize($_FILES["uploadPhoto"]["tmp_name"]);
	$photoWidth= $photoDetails[0];
   $photoHeight= $photoDetails[1];
	 	if($_FILES['uploadPhoto']['size'] <= 1048576) 
  		{
  	    	if($photoWidth<=300 && $photoHeight<=300)
			{
				$photoAccept=1 ;
				//move_uploaded_file($_FILES["uploadPhoto"]["tmp_name"], "uploads/" . $_FILES["uploadPhoto"]["name"]);
				//$photoPath = "uploads/" . $_FILES["uploadPhoto"]["name"];
			}
			else  echo "Photo greater than 300 X 300! Please upload file <=300 X 300 only!";
  		}
		else echo "Image greater than 1MB!!"	;
		
  
}
else echo "Image Format not accepted!!";


*/

  

		if ($securimage->check($_POST['captcha_code']) == true)  // checking captcha code and image attributes (2)
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
		$photoPath = make_safe($photoPath);
		$password = rand_string(8);
		
		
		$uniqueResult = mysqli_query($con,"SELECT * FROM user_details WHERE email='$email'") or die(mysqli_error($con));
		
					if(mysqli_num_rows($uniqueResult)==0)  // if email unique
					{
						    
							//photo check///////////////////////////////////////
							
							
							move_uploaded_file($_FILES['uploadPhoto']['name'], "" . $_FILES['uploadPhoto']['tmp_name']);

							$allowedExts = array("gif", "jpeg", "jpg", "png");
							$temp = explode(".", $_FILES["uploadPhoto"]["name"]);
							$extension = end($temp);
							
							if ((($_FILES["uploadPhoto"]["type"]=="image/gif")||($_FILES["uploadPhoto"]["type"] == "image/jpeg")||($_FILES["uploadPhoto"]["type"]=="image/jpg")||($_FILES[				 							"uploadPhoto"]["type"]=="image/png"))&& in_array($extension, $allowedExts))
							{
							   $photoDetails = getimagesize($_FILES['uploadPhoto']['tmp_name']);
								$photoWidth= $photoDetails[0];
							   $photoHeight= $photoDetails[1];
									if($_FILES['uploadPhoto']['size'] <= 1048576) 
									{
										if($photoWidth<=300 && $photoHeight<=300)
										{
											$photoAccept=1 ;
											move_uploaded_file($_FILES["uploadPhoto"]["tmp_name"],$photoPath);
							
											$q1 = "CALL InsertValues('$name','$email','$phone','$date','$photoPath','$password')";
											$res = mysqli_query($con,$q1) or die(mysqli_error($con));

													  if($res)
													  {
													  echo "Registration successful!" ;
										  
													  /*
													  MAIL CODE
													  $mailSubject="Welcome".$name;
													  $mailBody= "You have been successfully registered!Your password is".$password;	
													  if(mail($email,$mailSubject,$mailBody))
													  {
													  echo "An Email has been sent to your email address ".$email;
													  }
													  */
										  
													  echo "Click <a href=\"index.html\"> here </a> to login!";
													  }
									  
													  else
													  { echo "Unable to register! Please try again! "; }
							
						
							
										}
										else  echo "Photo greater than 300 X 300! Please upload file <=300 X 300 only!";
									}
									else echo "Image greater than 1MB!!"	;
									
							  
							}
							else echo "Image Format not accepted!!";
	
							
							//photo check///////////////////////////////////////
							
							
					}
					else
					{
					echo "Email id already exists in database!Please try with a different email address!";
					echo "Click <a href=\"index.html\"> here </a> to go back and try again!";
					}
		}
		else   //captcha mismatch (2)
		{
		echo "The security code entered was incorrect.<br /><br />";
		echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
		exit;
		}


?>