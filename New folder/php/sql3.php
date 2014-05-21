<?php
mysql_connect('localhost','root','') or die("cannot connect");
mysql_select_db('iit') or die("cannot select!");

$sql="SELECT id as i,name as n,username as u,password as p from table1";
$res= mysql_query($sql);
while($r=mysql_fetch_array($res,MYSQL_ASSOC)) 
/*
mysql_assoc-> to make association with sql table
*/
echo '<table>
<tr>
<td>'.$r['i'].'</td>
<td>'.$r['n'].'</td>
<td>'.$r['u'].'</td>
<td>'.$r['p'].'</td>
</tr>
</table>';

?>