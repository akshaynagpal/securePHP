
<?php
/*EXPLODE AND END AND DATE FUNCTION IN PHP 
19.12.2013 1:07 AM
*/
echo "<h1>EXPLODE() AND END() AND DATE() FUNCTION IN PHP </h1>";
$str = 'one,two,three,four';
echo "original string was ".$str."<br>";
$temp=explode(',',$str);  //breaks the string at commas.
echo "after using explode function... the string is converted to: "; 
print_r($temp);
echo "<br>";
echo "Last element of array is: ";
echo end($temp)."<br>" ;        //gives last element of an array.
echo "today is ";
echo date("d.m.Y"); //displays the date in dd.mm.YYYY format.
?>