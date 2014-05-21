<?php
class myclass
{
public $name="akshay nagpal";
private $maritalstatus="single";
#var $maritalstatus="single";
protected $phone="9999999999"; 
}
class yourclass extends myclass
{

function phonenumber()
{echo"my phn no. is ".$this->phone;}

}
$obj2=new yourclass();
#$obj1=new myclass();
#echo $obj1->maritalstatus;
echo $obj2->name; 
echo '<br>';

$obj2->phonenumber();


?>
