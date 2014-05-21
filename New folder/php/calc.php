<html>
CALCULATOR<br>
<form name="f1" action="calc.php" method="post">
enter 1st number: <input type=text name="num1" id="num1">
<select name="operator" id="operator">
<option>*</option>
<option>/</option>
<option>+</option>
<option>-</option>
</select>
enter 2nd number:
<input type=text name="num2" id="num2">
<input type=submit value="calculate">
</form>


<?php
$n1=$_GET['num1'];
$n2=$_GET['num2'];
$opr=$_GET['operator'];
switch($opr)
{
case "*":echo $n1*$n2;
         break;
case "/":echo $n1/$n2;
         break;
case "+":echo $n1+$n2;
         break;
case "-":echo $n1-$n2;
         break;
default:echo"error! please enter +/-/*// only!!";

}




?>