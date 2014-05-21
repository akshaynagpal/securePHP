<?php

#$a=array(array("1"=>"hello","2"=>"hi","3"=>"1"),
#
#         array("one"=>"5","two"=>"6","three"=>"7"));
$a=array(array("hello","hi","1"),

         array("5","6","7"));

$a2=array(3,4,5,6);
/*
sort($a[0]);
sort($a[1]);
sort($a);
print_r($a);
print_r(array_reverse($a[0]));
print_r(array_flip($a[0]));

print_r(array_merge($a,$a2));
$x=array_reverse($a2);
print_r($x);
*/
print_r($a[array_rand($a)][array_rand($a[1])]); #not working with associative.

?>