<?php
class myclass
{
CONST message="this is my class";

function printer()

  {
   echo self::message;
  }
}
$obj=new myclass();
$obj->printer();
#echo myclass::message
?>