<?php

if(file_exists("myfile.txt"))
echo"yes";
else echo"no";


if(is_file("myfile.txt"))
echo"yes";
else
echo"no";


if(is_dir("../iitphp"))
echo "yes";

if(is_readable("myfile.txt"))
echo"yes";
if (is_writable("myfile.txt"))
echo"yes";
else
echo"no";
echo(filesize("myfile.txt"));
?>