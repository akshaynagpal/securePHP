<!DOCTYPE HTML> 
<html>
<body>
<?php
$name = $email = " ";
if ($_SERVER["REQUEST_METHOD"] == "POST")	
{
	$name= $_POST["name"];
	$email= $_POST["email"];
} 
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit" name="submit" value="Submit">
</form>


<?php
echo "<h2>Your input:</h2>";
echo "your name is ",$name,"<br>";
echo "your email is " ,$email," Have a nice day!";
?>

</body>
</html>