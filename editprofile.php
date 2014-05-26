<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<header><h1>Edit Profile</h1></header>
<body>
<form action="editsubmit.php" method="POST" enctype="multipart/form-data">
Name: <input id="name" name="name" type="text" maxlength="30" pattern="[A-Za-z]{2,30}" title="only alphabets please!" required value= "<?php echo $_SESSION['Sname']; ?>"/><br /><br />
Email: <input id="email" name="email" type="email" required value= "<?php echo $_SESSION['Semail']; ?>" /><br /><br />
Phone: <input id="phone" name="phone" type="tel"  pattern="[0-9]{10}" title="Only 10 digit Numeric!" required value= "<?php echo $_SESSION['Sphone']; ?>" /><br /><br />
Date of Birth: <input type="date" name="dob" id="dob" required value= "<?php echo $_SESSION['Sdate']; ?>" /><br /><br />

<input type="submit" value="Update" />
</form>

</form>
</body>
</html>
