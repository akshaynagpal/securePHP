<?php
$name="Akshay";
printName();
echo $name;

function printName()
{
global $name;
$name="Akshay Nagpal";
}


?>