<?php

session_start();

				if(isset($_POST['oldpass']) && isset($_POST['newpass']))  //when fileds are filled in password change form
				{
					$oldpass=$_POST['oldpass'];
					$newpass=$_POST['newpass'];
					$confnewpass=$_POST['cnewpass'];
	
						if($oldpass==$_SESSION['Spassword'])
						{
								if($newpass==$confnewpass)
								{
									$q1 = "CALL ChangePass('$email','$newpass')";
									$res = mysqli_query($con,$q1) or die(mysqli_error($con));
	
										  if($res)
										  {
										  echo "Password change successful!" ;
										  echo "Click <a href=\"index.html\"> here </a> to login with your new password!";
										  }
						  
										  else
										  { echo "Error! Please try again! "; }
								}
								
								else
								{
									echo "New passwords do not match!";
									echo '<a href="changepass.php">Try again</a>';
								}
						}
						
						else
						{
							echo "Current Password Incorrect!";
							echo '<a href="changepass.php">Try again</a>';
						}
	
				}
				
				else
				{
					echo "Please login to view this page.!Redirecting to homepage...";
				  	header("refresh:3;url=index.html");
			    }
				
?>