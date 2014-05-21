<?php

class myclass
{

static $welcomemsg="welcome to php classes";
function printer()
{
echo self::$welcomemsg; #self is used to use static variale                         #inside a fuction of the same class
}


}




echo myclass::$welcomemsg;
?>