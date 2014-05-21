<?php
class myclass
{
var $welcmsg="welcome1";
function myclass()
{
echo $this->welcmsg;
}
/*function __construct() #higher priority
{
echo "this is construct";
}
*/
}
$obj=new myclass();

?>