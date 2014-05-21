<?php
class myclass
{
function welcome()
{
echo "welcome1";
}
}
class myclass2 extends myclass
{
function welcome()
{
echo "welcome2";
}
}
$obj=new myclass2;
$obj->welcome();
?>