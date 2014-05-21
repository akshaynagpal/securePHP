<?php
session_start();

if(empty($_SESSION['u2name']))
{
header("location:friends.php");
}
else
{
?>
<html>
welcome user! u are logged in!
<a href="logout.php">Logout</a>
</html>

<?php

}

?>