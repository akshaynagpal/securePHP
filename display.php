<?php
session_start();
require 'connect.php';
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
				  
								  if($passCheckArray['password'] == $password)  //if password matches
								  {
									$displayQuery = "SELECT * FROM user_details WHERE email='$email'";
									$displayResult = mysqli_query($con,$displayQuery) or die(mysqli_error($con));
									$displayArray = mysqli_fetch_array($displayResult);
									mysqli_free_result($displayResult);
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
									echo "<br/>";
									echo "YOUR PICTURE";
									echo $displayArray['photo'];
									echo '<img src="'.$displayArray['photo'].'"/>';
									echo "<a href=index.html>Log Out</a>";
								  }
								  
								  else  //password mismatch
								  {
									echo "Wrong Password !";
									echo "<a href=index.html>Try Again</a>";
								  }
				}
				
				else //redirect to homepage for login
				{
				  echo "Please login to view this page.!Redirecting to homepage...";
				
		   
				  header("refresh:3;url=index.html");
				}
?>