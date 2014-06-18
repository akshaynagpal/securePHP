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
									
									?>
									<header><h1> Your Profile </h1></header>
									<body>
									<img src="<?php echo $displayArray['photo']; ?>"/>
									<br />
									NAME:
									<?php echo $displayArray['name']; ?>
									<br/>
									FB id:
									<?php echo $displayArray['FB_id']; ?>
									PHONE: 
									<?php echo $displayArray['phone']; ?>
									echo "<br/>";
									echo "EMAIL:";
									<?php echo $displayArray['email']; ?>
									<br/>
									DATE:
									<?php echo $displayArray['date']; ?>
									<br/><br/>
									<a href="index.html">Logout</a>
									
									<a href= "changepass.php?email= <?php echo $email; ?> > Change Password</a>
									<a href="#">Change Profile Picture</a>
									<a href="editprofile.php">Edit Profile</a>
									</body>
									
								
									<?php
										//storing data in session variables
									$_SESSION['Sname']=$displayArray['name'];
									$_SESSION['Semail']=$displayArray['email'];
									$_SESSION['Sphone']= $displayArray['phone'];
									$_SESSION['Sdate']= $displayArray['date'];
									$_SESSION['SphotoPath']=$displayArray['photo'];
									$_SESSION['Spassword']= $password;
									mysqli_close($con);
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
				
				else if(isset($_POST['user_id']) && isset($_POST['user_name']))   //FB login
				{	
					function make_safe($variable) {  // function to prevent user from running sql code into form.
    				$variable = mysql_real_escape_string(trim($variable));
    				return $variable;
					}
					
					echo $u_id=make_safe($_POST['user_id']);
					echo $u_name=make_safe($_POST['user_name']);
					echo $u_email=make_safe($_POST['user_email']);
					echo $u_pic_url=make_safe($_POST['pic_url']);
					echo $u_dob=make_safe($_POST['user_dob']);
					
					$queryFB="CALL InsertFBValues('$u_id','$u_name','$u_email','$u_dob','$u_pic_url')";
					$resFB = mysqli_query($con,$queryFB) or die(mysqli_error($con));
					if($resFB)
					{
						 //connecting again
						  $con= mysqli_connect('localhost','root') or die("cannot connect");
				  
						  mysqli_select_db($con,'user_db') or die("cannot select!");
				  
				 				if (mysqli_connect_errno())
								{
								echo "Failed to connect to MySQL: ".mysqli_connect_error(); 
								}
				      			 //connection code ends
								 
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
									echo "EMAIL:";
									echo $displayArray['email'];
									echo "<br/>";
									echo "DATE: ";
									echo $displayArray['date'];
									echo "<br/><br/>";
									echo '<a href="index.html">Logout</a>';
									
									
									echo '<a href="#">Change Profile Picture</a>';
									echo '<a href="editprofile.php">Edit Profile</a>';
									echo "</body>";
									
									//storing data in session variables
									
									$_SESSION['Sname']=$displayArray['name'];
									$_SESSION['Semail']=$displayArray['email'];
									$_SESSION['Sdate']= $displayArray['date'];
									$_SESSION['SphotoPath']=$displayArray['photo'];
									mysqli_close($con);
						
						}
						
					
				}
				
				else //redirect to homepage for login
				{
				  echo "Please login to view this page.!Redirecting to homepage...";
				
		   
				  header("refresh:3;url=index.html");
				}
?>