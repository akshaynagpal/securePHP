<?php
$arrayEmployees=array(
                      array("Name"=>"tom","age"=>26),
                      array("Name"=>"jerry","age"=>24),
                      array("Name"=>"pluto","age"=>25),
                     )
foreach($arrayEmployees as $x)
{
foreach($x as $arrayPosition=>$arrayElement)
{echo "$arrayPosition=$arrayElement";}
}

?>