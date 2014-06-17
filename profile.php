<?php
session_start();
require 'connect.php';
echo '<link rel="stylesheet" href="profile.css" type="text/css">';

//$email='';
//$password='';

//$email = $_POST['loginEmail'];
//$password = $_POST['loginPassword'];
				
				if(isset($_POST['loginEmail']) && isset($_POST['loginPassword']))  //when fileds are filled in login form
				{
				  $email = $_POST['loginEmail'];
				  $password = $_POST['loginPassword'];
				  $passCheck = "CALL checkPass('$email')";
				  $passCheckResult = mysqli_query($con,$passCheck) or die(mysqli_error($con));
				  $emailCheck=mysqli_num_rows($passCheckResult);
				  $passCheckArray= mysqli_fetch_array($passCheckResult);
				  mysqli_free_result($passCheckResult);
				  mysqli_close($con);
				
				  //connecting again
				  $con= mysqli_connect('localhost','root') or die("cannot connect");
				  
				  mysqli_select_db($con,'user_db') or die("cannot select!");
				  
				 		if (mysqli_connect_errno())
						{
						echo "Failed to connect to MySQL: ".mysqli_connect_error(); 
						}
				       //connection code ends
				  
				  		if($emailCheck==1)
				  		{
				  
								  if($passCheckArray['password'] == $password)  //if password matches
								  {
									$displayQuery = "SELECT * FROM user_details WHERE email='$email'";
									$displayResult = mysqli_query($con,$displayQuery) or die(mysqli_error($con));
									$displayArray = mysqli_fetch_array($displayResult);
									mysqli_free_result($displayResult);
									echo "<header><h1> Your Profile </h1></header> ";
									echo "<body>";
									echo '<img src="'.$displayArray['photo'].'"/>';
									echo "<br />";
									echo "NAME: ";
									echo $displayArray['name'];
									echo "<br/>";
									echo "PHONE: ";
									echo $displayArray['phone'];
									echo "<br/>";
									echo "EMAIL:";
									echo $displayArray['email'];
									echo "<br/>";
									echo "DATE: ";
									echo $displayArray['date'];
									echo "<br/><br/>";
									echo '<a href="index.html">Logout</a>';
									
									echo '<a href= "changepass.php?email=' .$email.'" >Change Password</a>';
									echo '<a href="#">Change Profile Picture</a>';
									echo '<a href="editprofile.php">Edit Profile</a>';
									echo "</body>";
									
									//storing data in session variables
									
									$_SESSION['Sname']=$displayArray['name'];
									$_SESSION['Semail']=$displayArray['email'];
									$_SESSION['Sphone']= $displayArray['phone'];
									$_SESSION['Sdate']= $displayArray['date'];
									$_SESSION['SphotoPath']=$displayArray['photo'];
									$_SESSION['Spassword']= $password;
								  }
								  
								  else  //password mismatch
								  {
									echo "Wrong Password !";
									echo "<a href=index.html>Try Again</a>";
								  }
								  
				  		}
						else 
						{
						echo 'Email does not exist! Please enter correct email!';
						echo "<a href=index.html>Try Again</a>";
						}
				}
				//else if(isset($_POST['user_id']) && isset($_POST['user_name']))
				//{
					
				
					//}
				else //redirect to homepage for login
				{
				  echo "Please login to view this page.!Redirecting to homepage...";
				
		   
				  header("refresh:3;url=index.html");
				}
?>