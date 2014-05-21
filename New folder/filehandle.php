<?php
$x="hello.txt";
$file = fopen($x, "w") or exit("Unable to open file!");
if($file)
{
echo $x ." <strong>opened successfully!</strong><br>";
echo fwrite($file,"Hello World. Testing!");
fclose($file);
}
?>