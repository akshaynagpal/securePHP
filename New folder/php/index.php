<?php
#display

echo "this is my first program";

/*multi
line comment*/

#single line comment

#variable

$name="akshay";
echo "$name";

echo gettype($name);
$name2=3;
settype($name2,string);
echo gettype($name2);
settype($name2,integer);
echo gettype($name2);
$name3=array("akshay","hello","123");
echo $name3[0];
print_r($name3);
$name3[]="hacker";
print_r($name3);
$name4=array("name"=>"akshay","age"=>19);
print_r($name4);


?>