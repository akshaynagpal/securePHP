<?php
$x=5;
switch($x)
{
case($x<6):
   echo $x*$x;
   break;
case($x==6):
   echo $x*$x*$x;
   break;
case($x>6):
for($i=1;$i<11;$i++)
{echo "$x X $i =".$x*$i;
echo'<br>';
}
break;
}
?>