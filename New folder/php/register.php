<?php
echo $u2name=$_POST['uname'];
echo $p=$_POST['pass'];
echo $cp=$_POST['cpass'];
if($p==$cp)
{
 mysql_connect('localhost','root','') or die("ERROR! cannot connect to the database!");
 mysql_select_db('friends') or die("ERROR! database not found");

 $cmd1="SELECT COUNT(username) FROM userbase WHERE username='$u2name'";
 $cmd2=mysql_query($cmd1);
 $cmd3=mysql_result($cmd2,0);

      if($cmd3==0)
    	{
    	echo $n=$_POST['name'];
    	echo $e=$_POST['mail_id'];
	 $day=$_POST['day'];
	 $month=$_POST['month'];
	 $year=$_POST['year'];
	echo $d=$day." ".$month." ".$year;
	echo $g=$_POST['gender'];
        
	$cmd4="INSERT INTO userbase VALUES('$n','$e','$d','$g','$u2name','$p','')";
        $cmd5=mysql_query($cmd4);    
	   if($cmd5)
             {echo "success!!";}
     
	}
      else
	{echo "username already exists!";}



}

else
{echo "passwords dont match!";}

?>