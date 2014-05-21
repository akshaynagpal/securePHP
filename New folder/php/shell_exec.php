<?php
$cmd="msg * you have been hacked!";
$cmd2="start notepad";
$data=shell_exec($cmd);
$data=shell_exec($cmd2);
print_r($data);

?>