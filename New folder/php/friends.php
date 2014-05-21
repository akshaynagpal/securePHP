<html>
<head>
<h1>WELCOME TO FRIENDS.COM</h1>
<hr>
<h2>Sign in</h2>
</head>
<body>
<form name="old_user" action="login.php" method="POST">
username:<input type=text name="uname" id="uname">
<br>
password:<input type=password name="pass" id="pass">
<br>
<input type=submit value=login>
<br>
</form>
<hr>

<h2>OR..<br>
Sign Up</h2>



<form name="new_user" action="register.php" method="post">
Name:<input type=text name="name" id="name">
<br>
Email:<input type=text name="mail_id" id="mail_id">
<br>

DOB:
<select name="day" id="day">
<?php 
include 'date.php';
get_date();
?>
</select>

<select name="month" id="month">
<?php 
get_month();
?>
</select>
<select name="year" id="year">
<?php 
get_year();
?>
</select>
<br>
Gender:
<select name="gender" id="gender">
<option></option>
<option>Male</option>
<option>Female</option>
</select>
<br>
Username:<input type=text name="uname" id="uname">
<br>
Password:<input type=password name="pass" id="pass">
Confirm Password:<input type=password name="cpass" id="cpass">
<br>
<input type=submit value=Register>
</form>

</body>
</html>