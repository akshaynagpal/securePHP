<?php
class myclass
  {
   var $msg="this is my class";
  }
class myclass2 extends myclass
  {
function printer()
  {
  echo $this->msg;
  }}
$obj=new myclass2();
$obj->printer();

?>