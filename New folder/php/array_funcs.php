<?php
$array1= array(1,2,3,4);
$array2= array("1"=>"one","2"=>"two");
echo sizeof($array1);
echo '<br>';
echo sizeof($array2);
echo '<br>';
print_r(array_values($array2));
echo '<br>';
print_r(array_keys($array2));
echo '<br>';
echo array_pop($array1);   #removes last element
echo '<br>';
print_r($array1);
echo '<br>';
array_push($array1,"hello");#inserts new element at the end
print_r($array1);
echo '<br>';
echo array_shift($array2); #removes beginning element
echo '<br>';
print_r($array2);
#array_unshift inserts at the beginning
?>