<?php
$st=array("0"=>"a","2"=>"b","4"=>"c","6"=>"d","8"=>"e");
$dist=array_search("c",$st)-array_search("a",$st);

echo "distance= ".(array_search("c",$st)-array_search("a",$st));
$prsn=2;
$multi=5;

$fare=($prsn)*($multi)*($dist);
echo '<br>';
echo"fare= ".($fare);


#$x="a";
#$y="d";
#array_flip($st1);


?>