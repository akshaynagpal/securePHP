<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="index.css">
</head>

<header><h1>Change Password</h1></header>

<form action="changepasssubmit.php" method="POST">

Current Password:<input type="password" maxlength="8" id="oldpass" required/><br/><br/>
New Password:<input type="password"  maxlength="8" id="newpass"required/><br/><br/>
Confirm New Password:<input type="password" maxlength="8" id="cnewpass"required/><br/><br/>
<input type="submit" value="Change Password">

</form>
</html>
